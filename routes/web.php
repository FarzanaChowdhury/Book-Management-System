<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/upload', [BookController::class, 'create'])->name('books.upload');
Route::get('/books/{name}', [BookController::class, 'show'])->name('books.show');
Route::post('/books', [BookController::class, 'store'])->name('books.store');