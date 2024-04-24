<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $categories = Category::get();
        return inertia('Blogs/Create')->with(compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->all();

        $request->validate([
            'title' => 'required|string',
            'thumbnail' => 'required|file',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        try
        {
            $inputs['title'] = $request->title;
            $inputs['content'] = $request->content;
            $inputs['category_id'] = $request->category_id;
            $inputs['creator_id'] = Auth::id();
            $inputs['slug'] = Str::slug($request->title);

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
        $blog->delete();
        return back()->with('message', 'Record deleted successfully');
    }
}
