<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Blog;
use App\Models\Certification;
use App\Models\WorkExperience;

class PortfolioController extends Controller
{
    public function index() {
        $certifications = Certification::orderBy('issued_date', 'desc')->get();
        $workExperiences = WorkExperience::orderBy('start_date', 'desc')->get();

        return view('home', compact('certifications', 'workExperiences'));
    }

    public function projects() {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }
    
    public function blog() {
        $blog = Blog::all();
        return view('blog', compact('blog'));
    }
    
    public function workExperience() {
        $workExperience = workExperience::all();
        return view('workExperience', compact('workExperience'));
    }
    public function certifications() {
        $certifications = Certification::all();
        return view('certifications', compact('certifications'));
    }

    public function contact() {
        return view('contact');
    }

    public function submitContact(Request $request) {
        // Handle form submission (save to DB, send email, etc.)
        return back()->with('success', 'Message sent successfully!');
    }
}

