<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Merek Controllers

Route::get('/merek', [App\Http\Controllers\MerekController::class, 'index'])->name('merek.index');
Route::get('/merek/create', [App\Http\Controllers\MerekController::class, 'create'])->name('merek.create');
Route::get('/merek/{id}/edit', [App\Http\Controllers\MerekController::class, 'edit'])->name('merek.edit');
Route::post('/merek', [App\Http\Controllers\MerekController::class, 'store'])->name('merek.store');
Route::put('/merek/{id}', [App\Http\Controllers\MerekController::class, 'update'])->name('merek.update');
Route::delete('/merek/{id}', [App\Http\Controllers\MerekController::class, 'destroy'])->name('merek.destroy');


