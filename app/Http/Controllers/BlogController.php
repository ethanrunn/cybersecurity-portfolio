<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show($slug)
    {
        // Find blog by slug or fail
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('blogs.show', compact('blog'));
    }
}
