<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::all();
        return view('admin.blog.index', compact('data'));
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        Blog::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
        ]);
        return redirect()->back();
    }
    public function edit(Blog $blog)
    {
        return view('admin.blog.update', compact('blog'));
    }
    public function update(Request $request, Blog $blog)
    {
        $blog->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
        ]);
        return view('admin.blog.index');
    }
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }
}
