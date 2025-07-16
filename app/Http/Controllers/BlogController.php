<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new  \App\Models\Blog();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $blogs = $this->model->where('active', true)->latest()->get();
        return view('blogs')->with(compact('blogs'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog = $this->model->where('slug', 'LIKE', $slug)->first();
        if(!$blog) abort(404, 'Blog not found');
        $recentBlogs = $this->model->where('id', '!=', $blog->id)->where('active', true)->latest()->limit(3)->get();
        return view('blogs.'.$blog->file)->with(compact('blog', 'recentBlogs'));
    }
}
