<?php
namespace App\Repositories;

use App\Interfaces\CourseInterface;

use App\Models\Course;

class CourseRepository implements CourseInterface
{
    
    function __construct(Course $course)
    {
       $this->course = $course;
    }


    public function getAllCourses($limit = null)
    {
        if(is_null($limit))
            return $this->course->all();
        else
            return $this->course->get()->take($limit);
    }

    public function getCourse($slug)
    {
        return $this->course->where('slug', $slug)->first();
    }
    
    public function saveCourse($data = [])
    {
        return $this->course->create($data);
    }
}
