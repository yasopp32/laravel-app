<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MobilController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

// Merek Controllers
Route::get('/merek', [App\Http\Controllers\MerekController::class, 'index'])->name('merek.index');
Route::get('/merek/create', [App\Http\Controllers\MerekController::class, 'create'])->name('merek.create');
Route::get('/merek/{id}/edit', [App\Http\Controllers\MerekController::class, 'edit'])->name('merek.edit');
Route::post('/merek', [App\Http\Controllers\MerekController::class, 'store'])->name('merek.store');
Route::put('/merek/{id}', [App\Http\Controllers\MerekController::class, 'update'])->name('merek.update');
Route::delete('/merek/{id}', [App\Http\Controllers\MerekController::class, 'destroy'])->name('merek.destroy');

// Mobil Controllers

Route::get('/mobil', [App\Http\Controllers\MobilController::class, 'index'])->name('mobil.index');
Route::get('/mobil/create', [App\Http\Controllers\MobilController::class, 'create'])->name('mobil.create');
Route::get('/mobil/{id}/edit', [App\Http\Controllers\MobilController::class, 'edit'])->name('mobil.edit');
Route::post('/mobil', [App\Http\Controllers\MobilController::class, 'store'])->name('mobil.store');
Route::put('/mobil/{id}', [App\Http\Controllers\MobilController::class, 'update'])->name('mobil.update');
Route::delete('/mobil/{id}', [App\Http\Controllers\MobilController::class, 'destroy'])->name('mobil.destroy');

Route::resource('mobil', MobilController::class);

// Servis Controllers
Route::get('/servis', [App\Http\Controllers\ServisController::class, 'index'])->name('servis.index');
Route::get('/servis/create', [App\Http\Controllers\ServisController::class, 'create'])->name('servis.create');
Route::get('/servis/{id}/edit', [App\Http\Controllers\ServisController::class, 'edit'])->name('servis.edit');
Route::post('/servis', [App\Http\Controllers\ServisController::class, 'store'])->name('servis.store');
Route::put('/servis/{id}', [App\Http\Controllers\ServisController::class, 'update'])->name('servis.update');
Route::delete('/servis/{id}', [App\Http\Controllers\ServisController::class, 'destroy'])->name('servis.destroy');


