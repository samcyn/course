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

    public function show($id)
    {
        $course = $this->course->getCourse($id);

        return view('course.view', compact('course'));
    }
}
