<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// Ruta principal -> método getHome en HomeController
Route::get('/', [HomeController::class, 'getHome']);


// Rutas para categoría -> métodos en CategoryController
Route::get('/category', [CategoryController::class, 'getIndex']);
Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);
Route::get('/category/create', [CategoryController::class, 'getCreate']);
Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

