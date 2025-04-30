<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', [CourseController::class, 'index']);       // List all courses
Route::resource('courses', CourseController::class);       // CRUD endpoints
