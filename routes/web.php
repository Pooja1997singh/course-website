<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('courses', function () {
    return view('frontend.courses');
})->name('courses');

Route::get('placement', function () {
    return view('frontend.placement');
})->name('placement');
Route::get('hire', function () {
    return view('frontend.hire');
})->name('hire');
Route::get('privacy', function () {
    return view('frontend.privacy');
})->name('privacy');
Route::get('terms', function () {
    return view('frontend.terms');
})->name('terms');
Route::get('disclaimer', function () {
    return view('frontend.disclaimer');
})->name('disclaimer');
Route::get('refund', function () {
    return view('frontend.refund');
})->name('refund');
Route::get('aboutus', function () {
    return view('frontend.aboutus');
})->name('aboutus');
Route::get('contact', function () {
    return view('frontend.contact');
})->name('contact');
Route::get('enroll-in-course',[HomeController::class,'studentEnrollQueryView'])->name('course.enroll');
Route::post('enroll-in-course',[HomeController::class,'studentEnrollmentQuery'])->name('enroll.student');
