<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Blog::paginate();
        return inertia('Blogs/Index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Blogs/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|file',
            'content' => 'required'
        ]);

        try
        {
            $inputs['title'] = $request->title;
            $inputs['content'] = $request->content;

            if($request->has('thumbnail'))
            {
                $fileName = $request->file('thumbnail')->hashName();
                $request->file('thumbnail')->move(public_path('uploads/thumbs'), $fileName);
                $inputs['thumbnail'] = "/uploads/thumbs/$fileName";
            }
            
            Blog::create($inputs);

            return back()->with('message', 'Blogs created successfully');
        }
        catch(\Exception $th)
        {
            return back()->with('exception',$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
