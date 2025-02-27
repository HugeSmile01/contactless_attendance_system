<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Student Routes
Route::get('student/login', [StudentController::class, 'showLoginForm'])->name('student.login');
Route::post('student/login', [StudentController::class, 'login']);
Route::get('student/signup', [StudentController::class, 'showSignupForm'])->name('student.signup');
Route::post('student/signup', [StudentController::class, 'signup']);
Route::get('student/home', [StudentController::class, 'home'])->name('student.home');
Route::get('student/qr_scan', [StudentController::class, 'qrScan'])->name('student.qr_scan');

// Teacher Routes
Route::get('teacher/login', [TeacherController::class, 'showLoginForm'])->name('teacher.login');
Route::post('teacher/login', [TeacherController::class, 'login']);
Route::get('teacher/signup', [TeacherController::class, 'showSignupForm'])->name('teacher.signup');
Route::post('teacher/signup', [TeacherController::class, 'signup']);
Route::get('teacher/home', [TeacherController::class, 'home'])->name('teacher.home');
Route::get('teacher/attendance_view', [TeacherController::class, 'attendanceView'])->name('teacher.attendance_view');
Route::get('teacher/record_view', [TeacherController::class, 'recordView'])->name('teacher.record_view');
Route::get('teacher/section_view', [TeacherController::class, 'sectionView'])->name('teacher.section_view');
Route::get('teacher/student_list_view', [TeacherController::class, 'studentListView'])->name('teacher.student_list_view');
