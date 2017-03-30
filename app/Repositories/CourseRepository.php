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


    public function getAllCourses()
    {
        return $this->course->all();
    }

    public function getCourse($id)
    {
        return $this->course->find($id);
    }
    
    public function saveCourse($data = [])
    {
        return $this->course->create($data);
    }
}
