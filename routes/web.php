<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/guru', [App\Http\Controllers\GuruController::class, 'index']);
Route::get('/guru/create', [App\Http\Controllers\GuruController::class, 'create']);
Route::post('/guru', [App\Http\Controllers\GuruController::class, 'store']);
Route::get('/guru/{id}/edit', [App\Http\Controllers\GuruController::class, 'edit']);
Route::patch('/guru/{id}', [App\Http\Controllers\GuruController::class, 'update']);
Route::delete('/guru/{id}', [App\Http\Controllers\GuruController::class, 'destroy']);

Route::get('/kelas', [App\Http\Controllers\KelasController::class, 'index']);
Route::get('/kelas/create', [App\Http\Controllers\KelasController::class, 'create']);
Route::post('/kelas', [App\Http\Controllers\KelasController::class, 'store']);
Route::get('/kelas/{id}/edit', [App\Http\Controllers\KelasController::class, 'edit']);
Route::patch('/kelas/{id}', [App\Http\Controllers\KelasController::class, 'update']);
Route::delete('/kelas/{id}', [App\Http\Controllers\KelasController::class, 'destroy']);
