<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $blogs=Blog::paginate(3);
        return view('Frontend.Home',compact('blogs'));
    }
}
