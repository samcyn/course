<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\ApplicantInterface;
use App\Interfaces\CourseInterface;

class ApplicationController extends Controller
{
    public function __construct(ApplicantInterface $application, CourseInterface $course)
    {
        $this->application = $application;
        
        $this->course = $course;
    }

    public function index($slug)
    {
        $course = $this->course->getCourse($slug);

        return view('application.index', compact('course'));
    }

    public function store(Request $request, $slug)
    {
        $this->validate($request, [
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'phone' => 'required|min:11',
            'email' => 'required|min:10',
            'age_range' => 'required',
            'prefered_session' => 'required',
            'why_course' => 'required',
            'prev_training' => 'required',
            'employment_status' => 'required'
        ]);

        $course = $this->course->getCourse($slug);

        $data = $request->all();

        $data['course_id'] = $course->id;

        $application = $this->application->saveApplicant($data);

      
        return redirect('/payment/'. $application->id);
    }
}
