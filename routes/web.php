<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dbconn', function(){
return view('dbconn');
});

Route::get('/books', function () {
    $books = [
        ["name" => "Hello I am book", "author" => "Ami Author", "description" => "A book about a book", "id" => "1", "category" => "Informative"],
        ["name" => "Bookish", "author" => "Tallu mia", "description" => "Tallu miar boi", "id" => "2", "category" => "Comedy"]
    ];
    return view('books.index', ["books" => $books]);
});


Route::get('/books/upload', function () {
    return view('books.upload');
});

Route::get('/books/{name}', function ($name) {

    $books = [
        ["name" => "Hello I am book", "author" => "Ami Author", "description" => "A book about a book", "id" => "1", "category" => "Informative"],
        ["name" => "Bookish", "author" => "Tallu mia", "description" => "Tallu miar boi", "id" => "2", "category" => "Comedy"]
    ];

    // Find the book by name
    $book = collect($books)->firstWhere('name', $name);

    return view('books.bookDetails', ["book" => $book]);
});
