<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController; 
use App\Http\Controllers\ContactController; 
use Illuminate\Support\Facades\Route;

// Ruta principal -> método getHome en HomeController
Route::get('/', [HomeController::class, 'getHome']);


// Rutas para categoría -> métodos en PostController
Route::prefix('posts')->group(function(){
    Route::get('/', [PostController::class, 'getIndex']);
    Route::get('/show/{id}', [PostController::class, 'getShow']);

    // Rutas protegidas por autenticación
    Route::middleware('auth')->group(function (){
        Route::get('/create', [PostController::class, 'getCreate']);
        Route::post('/store', [PostController::class, 'store'])->name('posts.store');
        Route::get('/edit/{id}', [PostController::class, 'getEdit']);
        Route::put('/update/{id}', [PostController::class, 'update'])->name('posts.update');
        Route::get('/delete/{id}', [PostController::class, 'getDelete'])->name('posts.delete');
        Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::get('/my', [PostController::class, 'getMyCategories'])->name('posts.my');
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

