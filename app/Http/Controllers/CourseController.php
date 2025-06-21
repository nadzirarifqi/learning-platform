<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;

class CourseController
{
    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $gradients = $this->getGradients();
        
        // Get all courses by default, or search if query provided
        $coursesQuery = Course::active()->with('lessons');
        
        if ($query) {
            $coursesQuery = $coursesQuery->search($query);
        }
        
        $courses = $coursesQuery->get();
        
        
        // Convert to array format for Alpine.js compatibility
        $coursesArray = [];
        foreach ($courses as $course) {
            $coursesArray[$course->id] = [
                'id' => $course->id,
                'title' => $course->title,
                'description' => $course->description,
                'instructor' => $course->instructor,
                'level' => $course->level,
                'rating' => (float) $course->rating,
                'students' => (int) $course->students,
                'duration' => $course->duration,
                'videoUrl' => $course->video_url,
                'topics' => $course->topics,
                'price' => (float) $course->price,
                'lessons' => $course->lessons->map(function($lesson) {
                    return [
                        'id' => $lesson->id,
                        'title' => $lesson->title,
                        'duration' => $lesson->duration,
                        'type' => $lesson->type,
                        'is_free' => $lesson->is_free
                    ];
                })->toArray()
            ];
        }
        
        
        // Use 'courses' as the variable name to match your view
        return view('search', [
            'courses' => $coursesArray,
            'gradients' => $gradients,
            'query' => $query
        ]);
    }

    public function show($id)
    {
        $course = Course::active()->with('lessons')->findOrFail($id);
        
        return view('course-detail', compact('course'));
    }

    public function showLesson($courseId, $lessonId)
    {
        $course = Course::active()->with('lessons')->findOrFail($courseId);
        $lesson = $course->lessons()->findOrFail($lessonId);
        
        // Get previous and next lessons
        $previousLesson = $course->lessons()
            ->where('order', '<', $lesson->order)
            ->orderBy('order', 'desc')
            ->first();
            
        $nextLesson = $course->lessons()
            ->where('order', '>', $lesson->order)
            ->orderBy('order', 'asc')
            ->first();
        
        return view('lesson-detail', compact('course', 'lesson', 'previousLesson', 'nextLesson'));
    }

    private function getGradients()
    {
        return [
            'from-blue-500 to-purple-600',
            'from-green-500 to-teal-600', 
            'from-orange-500 to-red-600',
            'from-purple-500 to-pink-600',
            'from-indigo-500 to-blue-600',
            'from-pink-500 to-rose-600'
        ];
    }
}
