<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CourseService;

class CourseController
{
    public function index()
    {
        $courses = CourseService::getAllCourses();
        $gradients = CourseService::getGradients();
        
        return view('courses', compact('courses', 'gradients'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $courses = CourseService::getAllCourses();
        $gradients = CourseService::getGradients();
        
        if ($query) {
            $courses = CourseService::searchCourses($query);
        }
        
        return view('search', compact('courses', 'gradients', 'query'));
    }

    public function show($id)
    {
        $course = CourseService::getCourse($id);
        
        if (!$course) {
            abort(404, 'Course not found');
        }
        
        // Add the course ID to the course data for easier access in the view
        $course['id'] = $id;
        
        return view('course-detail', compact('course'));
    }
}
