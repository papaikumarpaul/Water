<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::all();
        return view('Frontend.Blog',compact('blogs'));
    }
    public function show($slug)
    {
        // ব্লগটি স্লাগ দিয়ে খুঁজুন
        $blog = Blog::where('slug', $slug)->firstOrFail();

        // ব্লগটি ভিউতে পাঠান
        return view('Frontend.blogShow',compact('blog'));
    }
}
