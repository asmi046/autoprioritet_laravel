<?php

namespace App\Http\Controllers;

use App\Models\Blog\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function index(Request $request) {
        $blog_in_main = Blog::select()->take(5)->get();

        return view('index', ["blog_in_main" => $blog_in_main]);
    }
}
