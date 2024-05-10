<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
        $categories = Category::whereIsActive(true)->get(['name', 'id']);
        $tags = Tag::whereIsActive(true)->get(['name', 'id']);
        return inertia('Blogs/Create')->with(compact('categories', 'tags'));
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
            'category_id.id' => 'required|exists:categories,id',
        ]);

        try
        {
            $inputs['title'] = $request->title;
            $inputs['content'] = $request->content;
            $inputs['category_id'] = $request->category_id['id'];
            $inputs['creator_id'] = Auth::id();
            $inputs['slug'] = Str::slug($request->title);

            if($request->has('thumbnail'))
            {
                $fileName = $request->file('thumbnail')->hashName();
                $request->file('thumbnail')->move(public_path('uploads/thumbs'), $fileName);
                $inputs['thumbnail'] = "/uploads/thumbs/$fileName";
            }
            
            $blog = Blog::create($inputs);

            $tag_ids = [];
            foreach ($request->tag_ids as $tag) {
                array_push($tag_ids, $tag['id']);
            }
            $blog->tags()->attach($tag_ids);

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
        $categories = Category::whereIsActive(true)->get(['name', 'id']);
        $tags = Tag::whereIsActive(true)->get(['name', 'id']);
        return inertia('Blogs/Edit')->with(compact('categories', 'tags', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string',
            'thumbnail' => 'nullable|file',
            'content' => 'required',
            'category_id.id' => 'required|exists:categories,id',
        ]);

        try
        {
            $inputs['title'] = $request->title;
            $inputs['content'] = $request->content;
            $inputs['category_id'] = $request->category_id['id'];
            $inputs['slug'] = Str::slug($request->title);

            if($request->has('thumbnail'))
            {
                $fileName = $request->file('thumbnail')->hashName();
                $request->file('thumbnail')->move(public_path('uploads/thumbs'), $fileName);
                $inputs['thumbnail'] = "/uploads/thumbs/$fileName";
            }
            
            $blog->update($inputs);

            $tag_ids = [];
            foreach ($request->tag_ids as $tag) {
                array_push($tag_ids, $tag['id']);
            }
            $blog->tags()->async($tag_ids);

            return back()->with('message', 'Blogs created successfully');
        }
        catch(\Exception $th)
        {
            return back()->with('exception',$th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        File::delete(public_path($blog->thumbnail)); // Delete related thumbnail
        $blog->tags()->detach(); // Delete related tags
        $blog->delete(); // Delete core resource
        return back()->with('message', 'Record deleted successfully');
    }
}
