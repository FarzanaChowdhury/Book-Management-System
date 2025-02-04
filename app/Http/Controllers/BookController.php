<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index() {
      // fetch all records & pass into the index view

      $books = Book::orderBy('created_at', 'desc')->paginate(6);

      return view('books.index', ["books" => $books]);
    }


    // public function index(Request $request) {
    //     // Get all unique authors and categories for dropdown
    //     $authors = Book::pluck('author')->unique();
    //     $categories = Book::pluck('category')->unique();
    
    //     // Start query
    //     $query = Book::query();
    
    //     // Apply filters if selected
    //     if ($request->has('author') && $request->author) {
    //         $query->where('author', $request->author);
    //     }
    
    //     if ($request->has('category') && $request->category) {
    //         $query->where('category', $request->category);
    //     }
    
    //     // Fetch filtered books
    //     $books = $query->orderBy('created_at', 'desc')->get();
    
    //     return view('books.index', compact('books', 'authors', 'categories'));
    // }
    



    public function show($name) {
      // fetch a single record & pass into show view

      // Find the book by name
    $book = Book::where('name', $name)->first();

    if (!$book) {
        return abort(404, 'Book not found');
    }


      return view('books.showDetails', ["book" => $book]);

    }

    public function create() {
      // render a create view (with web form) to users
     
      return view(('books.upload'));
    }



    
    public function store() {
      // hanlde POST request to store a new ninja record in table
    }

    public function destroy($id) {
      // handle delete request to delete a ninja record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}