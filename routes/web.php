<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/student/tabel', function () {
    return view('student.tabel-student');
});

Route::get('/biodata/mahasiswa', [StudentController::class, 'index']);
Route::post('/create/biodata/student', [StudentController::class, 'store'])->name('create.student');

require __DIR__.'/auth.php';

