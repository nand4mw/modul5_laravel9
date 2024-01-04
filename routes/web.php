<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LoginController;
use App\Models\JurusanModel;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Proses login
Route::post('/login', [LoginController::class, 'login']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa_tambah', [MahasiswaController::class, 'tambah']);
Route::post('/mahasiswa_tambah', [MahasiswaController::class, 'tambah_action']);
Route::get('/mahasiswa/{id}/hapus', [MahasiswaController::class, 'hapus']);
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit_action']);

Route::get('/jurusan', [JurusanController::class, 'index']);

Route::get('/jurusan_tambah', [JurusanController::class, 'tambah']);
Route::post('/jurusan_tambah', [JurusanController::class, 'tambah_action']);
Route::get('/jurusan/{id}/hapus', [JurusanController::class, 'hapus']);
Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit']);
Route::post('/jurusan/{id}/edit', [JurusanController::class, 'edit_action']);

Route::get('/login', function () {
    return view('login');
});
