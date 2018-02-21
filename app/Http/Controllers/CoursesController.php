<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function create()
    {
    	return view('courses.create');
    }

    public function store()
    {
    	//dd(request()->all());

    	$course = new Course;

    	$course->code = request('code');
    	$course->name = request('name');
    	$course->description = request('description');
    	$course->save();

    }
}
