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

    public function index($id)
    {
        $this->course->getCourse($id);

        return view('application.index');
    }

    public function store(Request $request)
    {
        $this->validation($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required|min:11',
            'email' => 'required|min:10',
            'age_range' => 'required',
            'prefered_session' => 'required',
            'why_course' => 'required',
            'prev_training' => 'required',
            'employment_status' => 'required'
        ]);


        $application = $this->application->saveApplicant($request->all());

        return redirect('/payment/'. $application->id);
    }
}
