<?php

use App\Http\Controllers\studentController;
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

Route::post('/addnewStudent', [studentController::class, 'form'])->name('student.index');
// Route::get('/add-event', [App\Http\Controllers\studentController::class , 'create'])->name('product.create');
Route::get('/', function () {
    return view('form');
})->name('student.form');

Route::get('/studentdata', [studentController::class, 'studentdata'])->name('student.studentdata');
Route::get('/allstudentdata', function () {
    return view('students');
})->name('student.allstudentdata');

Route::get('edit/{id?}', [studentController::class, 'form'])->name('student.edit');