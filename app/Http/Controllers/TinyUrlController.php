<?php

namespace App\Http\Controllers;

use App\Models\TinyUrl;
use Illuminate\Http\Request;

class TinyUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tinyurl');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'site_url' => 'required|url'
        ],[
            'site_url.required' => 'Please enter a URL.',
            'site_url.url' => 'Please enter a valid URL.'
        ]);

        $tinyUrl = TinyUrl::create([
            'site_url' => $request->input('site_url'),
            'short_url' => str()->random(10), // Generate a random 10 character string
            'ip_address' => $request->ip(),
            'browser' => $request->header('User-Agent'),
            'device' => $request->header('Device-Type', 'unknown'),
            'location' => $request->header('X-Forwarded-For', 'unknown'),
        ]);

        return response()->json([
            'success' => true,
            'short_url' => url('/t/' . $tinyUrl->short_url)
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $short_url)
    {
        $tinyUrl = TinyUrl::where('short_url', $short_url)->first();

        if(!$tinyUrl || !$tinyUrl->active) {
            return redirect('/turl/404');
        }

        // Log the visit
        $tinyUrl->increment('visits'); // Assuming you have a 'visits' column
        $tinyUrl->last_visited_at = now(); // Update last visited time
        $tinyUrl->save();

        return redirect($tinyUrl->site_url);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TinyUrl $tinyUrl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TinyUrl $tinyUrl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TinyUrl $tinyUrl)
    {
        //
    }
}
