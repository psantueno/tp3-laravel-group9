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

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/category/create', [CategoryController::class, 'getCreate']);
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);
    Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'getDelete'])->name('category.delete');
    Route::delete('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('category/my', [CategoryController::class, 'getMyCategories'])->name('category.my');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

require __DIR__.'/auth.php';

