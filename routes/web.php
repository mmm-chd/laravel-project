<?php

use App\Models\Classroom;
use App\View\Components\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GuardiansController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\admin\StudentsAdController;
use App\Http\Controllers\admin\SubjectsAdController;
use App\Http\Controllers\admin\TeachersAdController;
use App\Http\Controllers\admin\ClassroomAdController;
use App\Http\Controllers\admin\DashboardAdController;
use App\Http\Controllers\admin\GuardiansAdController;
//
// Route::get('/', function () {
//     return view('Selamat datang di web saya');
// });
Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('', [HomeController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);
    Route::get('/students', [StudentsController::class, 'index']);
    Route::get('/guardians', [GuardiansController::class, 'index']);
    Route::get('/classrooms', [ClassroomController::class, 'index']);
    Route::get('/teacher', [TeacherController::class, 'index']);
    Route::get('/subject', [SubjectController::class, 'index']);
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('', [DashboardAdController::class, 'index']);
    Route::get('/dashboard', [DashboardAdController::class, 'index']);

    Route::get('/students', [StudentsAdController::class, 'index'])->name('students.table');
    Route::post('/students', [StudentsAdController::class, 'store'])->name('students.store');
    Route::put('/students/{id}', [StudentsAdController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [StudentsAdController::class, 'destroy'])->name('students.destroy');

    Route::get('/guardians', [GuardiansAdController::class, 'index'])->name('guardians.table');
    Route::post('/guardians', [GuardiansAdController::class, 'store'])->name('guardians.store');
    Route::put('/guardians/{id}', [GuardiansAdController::class, 'update'])->name('guardians.update');
    Route::delete('/guardians/{id}', [GuardiansAdController::class, 'destroy'])->name('guardians.destroy');

    Route::get('/classroom', [ClassroomAdController::class, 'index'])->name('classrooms.table');
    Route::post('/classroom', [ClassroomAdController::class, 'store'])->name('classrooms.store');
    Route::put('/classroom/{id}', [ClassroomAdController::class, 'update'])->name('classrooms.update');

    Route::get('/teachers', [TeachersAdController::class, 'index'])->name('teachers.table');
    Route::post('/teachers', [TeachersAdController::class, 'store'])->name('teachers.store');
    Route::put('/teachers/{id}', [TeachersAdController::class, 'update'])->name('teachers.update');
    Route::delete('/teachers/{id}', [TeachersAdController::class, 'destroy'])->name('teachers.destroy');

    Route::get('/subjects', [SubjectsAdController::class, 'index'])->name('subjects.table');
    Route::post('/subjects', [SubjectsAdController::class, 'store'])->name('subjects.store');
    Route::put('/subjects/{id}', [SubjectsAdController::class, 'update'])->name('subjects.update');
});


Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])
        ->name('login')
        ->middleware('guest');

    Route::post('/login', [LoginController::class, 'login'])
        ->name('auth.login')
        ->middleware('guest');

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('auth.logout')
        ->middleware('auth');
});
