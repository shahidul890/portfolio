<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Tag::paginate();
        return inertia('Tags/Index', compact('collection'));
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
            'name' => 'required|string|unique:tags',
        ]);

        try
        {
            $inputs['name'] = $request->name;
            $inputs['is_active'] = 1;
            
            Tag::create($inputs);

            return back()->with('message', 'Record created successfully');
        }
        catch(\Exception $th)
        {
            return back()->with('exception',$th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        try
        {
            $inputs['name'] = $request->name;
            $inputs['is_active'] = $request->input('active', $tag->is_active);
            
            $tag->update($inputs);

            return back()->with('message', 'Record updated successfully');
        }
        catch(\Exception $th)
        {
            return back()->with('exception',$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();
        return back()->with('message', 'Deleted successfully');
    }

    /**
     * Update status of the specified resource from storage.
     */
    public function toggleStatus(int $id)
    {
        $tag = Tag::find($id);
        $tag->is_active = ($tag->is_active) ? 0 : 1;
        $tag->save();
        return back()->with('message', 'Updated successfully');
    }
}
