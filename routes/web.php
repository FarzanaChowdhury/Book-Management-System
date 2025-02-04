<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn', function () {
    return view('dbconn');
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/upload', [BookController::class, 'create']);
Route::get('/books/{name}', [BookController::class, 'show']);
