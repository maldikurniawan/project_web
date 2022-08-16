<?php

use App\Http\Controllers\StudentController;
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

require __DIR__.'/auth.php';

Route::get('/student', [StudentController::class, 'create'])->name('student.create');
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/index', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/{student:npm}', [StudentController::class, 'show'])->name('student.show');
Route::get('/student/edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/update/student/show/{student}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/delete/student/show/{student}', [StudentController::class, 'delete'])->name('student.delete');

