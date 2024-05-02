<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;

use App\Models\Blog\Blog;

class BlogController extends Controller
{

    public function index() {
        $all_blog = Blog::all();
        return view('blog-page', ['all_blog' => $all_blog]);
    }

    public function blog_page($slug) {
        $blog = Blog::where('slug', $slug)->first();
        if($blog == null) abort('404');
        return view('blog-page', ['blog' => $blog]);
    }
}
