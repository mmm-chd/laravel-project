<?php

use App\Http\Controllers\admin\StudentsAdController;
use App\Http\Controllers\admin\DashboardAdController;
use App\Http\Controllers\admin\ClassroomAdController;
use App\Http\Controllers\admin\GuardiansAdController;
use App\Http\Controllers\admin\SubjectsAdController;
use App\Http\Controllers\admin\TeachersAdController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuardiansController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Models\Classroom;
use App\View\Components\admin;
use Illuminate\Support\Facades\Route;
//
// Route::get('/', function () {
//     return view('Selamat datang di web saya');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/students', [StudentsController::class, 'index']);
Route::get('/guardians', [GuardiansController::class, 'index']);
Route::get('/classrooms', [ClassroomController::class, 'index']);
Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/subject', [SubjectController::class, 'index']);

Route::get('/admin', [DashboardAdController::class, 'index']);
Route::get('/admin/dashboard', [DashboardAdController::class, 'index']);

Route::get('/admin/students', [StudentsAdController::class, 'index'])->name('students.table');
Route::post('admin/students', [StudentsAdController::class, 'store'])->name('students.store');
Route::put('/admin/students/{id}', [StudentsAdController::class, 'update'])->name('students.update');
Route::delete('/admin/students/{id}', [StudentsAdController::class, 'destroy'])->name('students.destroy');

Route::get('/admin/guardians', [GuardiansAdController::class, 'index'])->name('guardians.table');
Route::post('/admin/guardians', [GuardiansAdController::class, 'store'])->name('guardians.store');
Route::put('/admin/guardians/{id}', [GuardiansAdController::class, 'update'])->name('guardians.update');
Route::delete('/admin/guardians/{id}', [GuardiansAdController::class, 'destroy'])->name('guardians.destroy');

Route::get('/admin/classroom', [ClassroomAdController::class, 'index'])->name('classrooms.table');
Route::post('admin/classroom', [ClassroomAdController::class, 'store'])->name('classrooms.store');
Route::put('admin/classroom/{id}', [ClassroomAdController::class, 'update'])->name('classrooms.update');

Route::get('/admin/teachers', [TeachersAdController::class, 'index'])->name('teachers.table');
Route::post('/admin/teachers', [TeachersAdController::class, 'store'])->name('teachers.store');
Route::put('/admin/teachers/{id}', [TeachersAdController::class, 'update'])->name('teachers.update');
Route::delete('/admin/teachers/{id}', [TeachersAdController::class, 'destroy'])->name('teachers.destroy');

Route::get('/admin/subjects', [SubjectsAdController::class, 'index'])->name('subjects.table');
Route::post('admin/subjects', [SubjectsAdController::class, 'store'])->name('subjects.store');
Route::put('admin/subjects/{id}', [SubjectsAdController::class, 'update'])->name('subjects.update');
