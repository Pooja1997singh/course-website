<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('courses', function () {
    return view('frontend.courses');
})->name('courses');

Route::get('enroll-in-course',[HomeController::class,'studentEnrollQueryView'])->name('course.enroll');
Route::post('enroll-in-course',[HomeController::class,'studentEnrollmentQuery'])->name('enroll.student');
