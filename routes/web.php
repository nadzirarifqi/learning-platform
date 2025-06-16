<?php

use Illuminate\Support\Facades\Route;

// Dashboard routes (main page)
Route::get('/', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->name('dashboard');

// Platform navigation routes
Route::get('/inbox', function () {
    return view('inbox', ['title' => 'Inbox']);
})->name('inbox');

Route::get('/schedule', function () {
    return view('schedule', ['title' => 'Schedule']);
})->name('schedule');

Route::get('/course', function () {
    return view('course',  ['title' => 'Course']);
})->name('course');

Route::get('/settings', function () {
    return view('settings', ['title' => 'Settings']);
})->name('settings');

Route::get('/learnmap', function () {
    return view('learnmap', ['title' => 'LearnMap']);
})->name('learnmap');


// // User profile and account routes
Route::get('/profile', function () {
    return view('profile', ['title' => 'Profile']);
})->name('profile');

Route::get('/subscription', function () {
    return view('subscription', ['title' => 'Subscription']);
})->name('subscription');


// // Authentication routes
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Additional utility routes you might need
Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

// If you want to add authentication middleware to protect certain routes
Route::middleware(['auth'])->group(function () {
    // Protected routes go here
    // Example:
    // Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

// If you're using Laravel Breeze, Jetstream, or custom auth, you might want to add:
// require __DIR__.'/auth.php';

// API routes for AJAX calls (optional)
Route::prefix('api')->group(function () {
    Route::get('/notifications/count', function () {
        return response()->json(['count' => 3]);
    });
});