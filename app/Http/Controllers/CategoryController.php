<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Category::paginate();
        return inertia('Categories/Index', compact('collection'));
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
            'name' => 'required|string|unique:categories',
        ]);

        try
        {
            $inputs['name'] = $request->name;
            $inputs['creator_id'] = Auth::id();
            $inputs['is_active'] = 1;
            
            Category::create($inputs);

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
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        try
        {
            $inputs['name'] = $request->name;
            // $inputs['creator_id'] = Auth::id();
            // $inputs['is_active'] = 1;
            
            $category->update($inputs);

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
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('message', 'Deleted successfully');
    }

    /**
     * Update status of the specified resource from storage.
     */
    public function toggleStatus(int $id)
    {
        $category = Category::find($id);
        $category->is_active = ($category->is_active) ? 0 : 1;
        $category->save();
        return back()->with('message', 'Updated successfully');
    }
}
