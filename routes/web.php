<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Merek Controllers
Route::get('/merek', [App\Http\Controllers\MerekController::class, 'index'])->name('merek.index');
Route::post('/merek', [App\Http\Controllers\MerekController::class, 'store'])->name('merek.store');
Route::get('/merek/create', [App\Http\Controllers\MerekController::class, 'create'])->name('merek.create');
Route::get('/merek/{id}/edit', [App\Http\Controllers\MerekController::class, 'edit'])->name('merek.edit');
