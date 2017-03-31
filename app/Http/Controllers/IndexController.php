<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\CourseInterface;

class IndexController extends Controller
{
    public function __construct(CourseInterface $course)
    {
        $this->course = $course;
    }

    public function index()
    {
        $courses = $this->course->getAllCourses();


        return view('home.index', compact('courses'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'course_id' => 'required',
            'email' => 'required|min:10'
        ]);

        $course = $this->course->getCourse($request->course_id);
       
        return redirect('/courses/'.$course->slug)->withInput($request->all());
    }
}
