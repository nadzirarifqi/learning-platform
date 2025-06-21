<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return redirect()->route('search');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->name('dashboard');

Route::get('/inbox', function () {
    return view('inbox');
})->name('inbox');

Route::get('/schedule', ['title' => 'Schedule'], function () {
    return view('schedule');
})->name('schedule');

// Main search/courses page (merged)
Route::get('/search', [CourseController::class, 'search'])->name('search');
Route::get('/courses', [CourseController::class, 'search'])->name('courses'); // Redirect to search

Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{courseId}/lessons/{lessonId}', [CourseController::class, 'showLesson'])->name('courses.lessons.show');


Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/subscription', function () {
    return view('subscription');
})->name('subscription');

Route::get('/learnmap', ['title' => 'LearnMap'], function () {
    return view('learnmap');
})->name('learnmap');
