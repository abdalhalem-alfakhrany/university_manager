<?php
use App\Http\Controllers\Dashboard\CourseController;
use App\Http\Controllers\Dashboard\LecturerController;
use App\Http\Controllers\Dashboard\StudentController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => Inertia::render('Dashboard/Index'))
    ->middleware('auth')
    ->name('index');

Route::resource('course', CourseController::class);
Route::resource('lecturer', LecturerController::class);
Route::resource('student', StudentController::class);
