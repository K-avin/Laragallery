<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function blogs()
    {
        return view('blog_index');
    }
    public function singleBlog()
    {
        return view('single_blog');
    }
}
