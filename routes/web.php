<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/student', [StudentController::class , 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class , 'create'])->name('student.create');
Route::post('/create', [StudentController::class , 'store'])->name('student.store');
Route::get('/create/{student}/edit', [StudentController::class , 'edit'])->name('student.edit');
Route::put('/create/{student}/update', [StudentController::class , 'update'])->name('student.update');
Route::delete('/create/{student}/delete', [StudentController::class , 'delete'])->name('student.delete');
Route::get('/file_upload', [FileController::class, 'open_file_form'])->name('upload_file');
Route::post('/file_upload', [FileController::class, 'store_file'])->name('store_file');
Route::get('/show_data', [FileController::class, 'show_file_data']);
Route::get('/view_file/{id}', [FileController::class, 'file_view'])->name('view_file');
Route::get('/download_file/{file}', [FileController::class,'file_download'])->name('file_download');
// Route::put('/create/{student}', [StudentController::class , 'update'])->name('student.update');