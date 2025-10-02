<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GuardiansController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;
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
