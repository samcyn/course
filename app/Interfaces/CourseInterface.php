<?php
namespace App\Interfaces;

interface CourseInterface
{
    public function getAllCourses();
    public function getCourse($id);
    public function saveCourse($data = []);
}