<?php

namespace App\Http\Controllers\Blog;

use App\Models\Blog\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{

    public function index() {
        $all_blog = Blog::orderBy('created_at', 'DESC')->paginate(15);
        return view('blog.blog', ['all_blog' => $all_blog]);
    }

    public function blog_page($slug) {
        $page = Blog::where('slug', $slug)->first();
        if($page == null) abort('404');
        return view('blog.blog-page', ['page' => $page]);
    }
}
