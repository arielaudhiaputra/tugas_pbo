<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
Route::put('proses/{id}', [UserController::class, 'proses'])->name('proses');
Route::get('insert', [UserController::class, 'insert'])->name('insert');
Route::get('hapus/{id}', [UserController::class, 'hapus'])->name('hapus');
Route::post('/tambah', [UserController::class, 'tambah'])->name('proses.insert');


// Route::get('registration', [AuthController::class, 'registration'])->name('registration');
// Route::post('create', [AuthController::class, 'create'])->name('auth.create');
// Route::post('check', [AuthController::class, 'check'])->name('auth.check');
// Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
// Route::get('edit', [UserController::class, 'edit'])->name('edit');
// Route::put('proses', [UserController::class, 'proses'])->name('edit.user');
// Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('sidebar', [UserController::class, 'sidebar'])->name('sidebar');