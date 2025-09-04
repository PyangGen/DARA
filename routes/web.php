<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
use App\Http\Controllers\Auth\LoginController;
/* 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
 */
Route::get('/student', function () {
    return view('student.dashboard');
});

Route::get('/student/document-status', function () {
    return view('student.document-status');
});
Route::get('/student/document-submission', function () {
    return view('student.document-submission');
});
Route::get('/student/edit', function () {
    return view('student.edit');
});
Route::get('/student/pdf-reader', function () {
    return view('student.pdf-reader');
});