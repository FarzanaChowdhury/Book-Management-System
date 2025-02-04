<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
      // route --> /ninjas/
      // fetch all records & pass into the index view

      $books = Book::orderBy('created_at', 'desc')->get();

      return view('books.index', ["books" => $books]);
    }

    public function show($name) {
      // route --> /ninjas/{id}
      // fetch a single record & pass into show view

      // Find the book by name
    $book = Book::where('name', $name)->first();

    if (!$book) {
        return abort(404, 'Book not found');
    }


      return view('books.showDetails', ["book" => $book]);

    }

    public function create() {
      // route --> /ninjas/create
      // render a create view (with web form) to users
    }

    public function store() {
      // --> /ninjas/ (POST)
      // hanlde POST request to store a new ninja record in table
    }

    public function destroy($id) {
      // --> /ninjas/{id} (DELETE)
      // handle delete request to delete a ninja record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}