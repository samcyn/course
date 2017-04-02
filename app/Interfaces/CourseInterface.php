<?php
namespace App\Interfaces;

interface CourseInterface
{
    public function getAllCourses($limit = null);
    public function getCourse($slug);
    public function saveCourse($data = []);
}