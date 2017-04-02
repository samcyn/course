<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Interfaces\CourseInterface;
use App\Interfaces\FaqInterface;

class IndexController extends Controller
{
    public function __construct(CourseInterface $course, FaqInterface $faq)
    {
        $this->course = $course;
        $this->faq = $faq;
    }

    public function index()
    {
        $courses = $this->course->getAllCourses(4);


        return view('home.index', compact('courses'));
    }


    public function about()
    {
        return view('home.about');
    }

    public function faq()
    {
        $faqs = $this->faq->getAllFaq();
        
        return view('home.faq', compact('faqs'));
    }

    public function singleFaq($slug)
    {
        $faq = $this->faq->getFaq($slug);

        $other_faqs = $this->faq->getAllFaq(4);

        return view('home.singlefaq', compact('faq', 'other_faqs'));
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
