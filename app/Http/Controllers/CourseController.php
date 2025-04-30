<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        Course::create($request->validate([
            'title'       => 'required|string',
            'description' => 'required|string',
            'credits'     => 'required|integer'
        ]));
        return redirect()->route('courses.index');
    }

    // ... show, edit, update, destroy methods ...
}
