<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->name('dashboard');

Route::get('/inbox', function () {
    return view('inbox');
})->name('inbox');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/search', [CourseController::class, 'search'])->name('search');

// Updated route to use controller method
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

Route::get('/courses/{courseId}/lessons/{lessonId}', function($courseId, $lessonId) {
    return view('lesson-detail', ['courseId' => $courseId, 'lessonId' => $lessonId]);
})->name('courses.lessons.show');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/subscription', function () {
    return view('subscription');
})->name('subscription');

Route::get('/learnmap', function () {
    return view('learnmap');
})->name('learnmap');

