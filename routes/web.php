<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\ContactController; 
use Illuminate\Support\Facades\Route;

// Ruta principal -> método getHome en HomeController
Route::get('/', [HomeController::class, 'getHome']);


// Rutas para categoría -> métodos en CategoryController
Route::prefix('category')->group(function(){
    Route::get('/', [CategoryController::class, 'getIndex']);
    Route::get('/show/{id}', [CategoryController::class, 'getShow']);

    // Rutas protegidas por autenticación
    Route::middleware('auth')->group(function (){
        Route::get('/create', [CategoryController::class, 'getCreate']);
        Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
        Route::get('/edit/{id}', [CategoryController::class, 'getEdit']);
        Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('/delete/{id}', [CategoryController::class, 'getDelete'])->name('category.delete');
        Route::delete('/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
        Route::get('/my', [CategoryController::class, 'getMyCategories'])->name('category.my');
    });
});

// Rutas del perfil y protegidas por autenticación -> métodos en ProfileController
Route::middleware('auth')->group(function () {
    Route::prefix('profile')->group(function(){
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'getContact'])->name('contact');
    Route::post('/create', [ContactController::class, 'createCommentary'])->name('contact.create');
});

Route::view('/about', 'about')->name('about');

require __DIR__.'/auth.php';

