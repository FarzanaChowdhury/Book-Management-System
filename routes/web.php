<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;


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
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');


Auth::routes(['verify' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);

Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/super-admin', function () {
        return "Super Admin Panel";
    });
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', function () {
        return "Admin Panel";
    });
});

Route::middleware(['auth', 'role:author'])->group(function () {
    Route::get('/author', function () {
        return "Author Dashboard";
    });
});

