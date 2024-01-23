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

Route::get('/', [studentController::class , 'index'])->name('product.index');
Route::get('student/create', [studentController::class , 'create'])->name('product.create');
// Route::any('student/store', [studentController::class , 'store'])->name('product.store');
// Route::get('student/{id}/edit', [studentController::class , 'edit'])->name('product.edit');
// Route::delete('student/{id}/delete', [studentController::class , 'delete'])->name('product.delete');