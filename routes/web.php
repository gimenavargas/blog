<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/uno', [App\Http\Controllers\unoController::class, 'uno'])->name('uno');
Route::get('/Dos', [App\Http\Controllers\DosController::class, 'Dos'])->name('Dos');
Route::get('/Tres', [App\Http\Controllers\TresController::class, 'Tres'])->name('Tres');
Route::get('/Cuatro', [App\Http\Controllers\CuatroController::class, 'Cuatro'])->name('Cuatro');
Route::get('/Cinco', [App\Http\Controllers\CincoController::class, 'Cinco'])->name('Cinco');