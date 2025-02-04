<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn', function(){
return view('dbconn');
});

Route::get('/books', [BookController::class, 'index']);


Route::get('/books/upload', function () {
    return view('books.upload');
});

 Route::get('/books/{name}', [BookController::class, 'show']);