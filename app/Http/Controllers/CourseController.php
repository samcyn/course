<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\CourseInterface;

class CourseController extends Controller
{
    public function __construct(CourseInterface $course)
    {
        $this->course = $course;
    }

    public function index()
    {
        $courses = $this->course->getAllCourses();
        
        return view('course.index', compact('courses'));
    }

    public function show($slug)
    {
        $course = $this->course->getCourse($slug);

        return view('course.view', compact('course'));
    }
}
