<?php
namespace App\Interfaces;

interface CourseInterface
{
    public function getAllCourses();
    public function getCourse($slug);
    public function saveCourse($data = []);
}