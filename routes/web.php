<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/blog/{blog}/update', [BlogController::class, 'update'])->name('blog.update');
Route::post('/blog/{blog}/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');