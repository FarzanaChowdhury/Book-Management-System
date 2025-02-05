<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
  public function index(Request $request) {
    // Get all unique authors and categories for filter dropdowns
    $authors = Book::pluck('author')->unique();
    $categories = Book::pluck('category')->unique();

    // Start query
    $query = Book::query();

    // Apply search filter
    if ($request->has('search') && $request->search) {
        $searchTerm = $request->search;
        $query->where(function($q) use ($searchTerm) {
            $q->where('name', 'LIKE', "%{$searchTerm}%")
              ->orWhere('author', 'LIKE', "%{$searchTerm}%")
              ->orWhere('category', 'LIKE', "%{$searchTerm}%");
        });
    }

    // Apply author filter
    if ($request->has('author') && $request->author) {
        $query->where('author', $request->author);
    }

    // Apply category filter
    if ($request->has('category') && $request->category) {
        $query->where('category', $request->category);
    }

    // Get filtered books
    $books = $query->orderBy('created_at', 'desc')->paginate(6);

    return view('books.index', compact('books', 'authors', 'categories'));
}


//   public function index(Request $request) {
//     $query = Book::query();

//     if ($request->has('search') && $request->search) {
//         $searchTerm = $request->search;
//         $query->where('name', 'LIKE', "%{$searchTerm}%")
//               ->orWhere('author', 'LIKE', "%{$searchTerm}%")
//               ->orWhere('category', 'LIKE', "%{$searchTerm}%");
//     }

//     $books = $query->orderBy('created_at', 'desc')->paginate(6);

//     return view('books.index', compact('books'));
// }



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




  public function show($name)
  {
    // fetch a single record & pass into show view

    // Find the book by name
    $book = Book::where('name', $name)->first();

    if (!$book) {
      return abort(404, 'Book not found');
    }


    return view('books.showDetails', ["book" => $book]);
  }

  public function create()
  {
    // render a create view (with web form) to users

    return view(('books.upload'));
  }




  public function store(Request $request)
  {
    // Validate input
    $validated = $request->validate([
      'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120', // max 5MB
      'name' => 'required|string|max:255',
      'author' => 'required|string|max:255',
      'description' => 'required|string|max:200',
      'category' => 'required',
    ]);

    // Log the request data to check if the file is part of the request
    Log::info('Request files:', $request->all());

    // Check if a file has been uploaded
    if ($request->hasFile('cover_image')) {
      $file = $request->file('cover_image');
      Log::info('File info', [
        'name' => $file->getClientOriginalName(),
        'size' => $file->getSize(),
        'mime' => $file->getMimeType(),
      ]);


      if ($request->hasFile('cover_image')) {
        $imagePath = $request->file('cover_image')->store('cover_images', 'public'); 
        $validated['cover_image'] = $imagePath;
        Log::info('Stored image path:', ['path' => $imagePath]);  // Log to confirm
    }
    


      // Store the file and save the path
      $imagePath = $file->store('cover_images', 'public');
      Log::info('Image stored at: ' . $imagePath);
      $validated['cover_image'] = $imagePath;
    } else {
      // Log and handle if file is missing
      Log::error('No image file detected');
      return redirect()->back()->with('error', 'Image upload failed');
    }

    // Create book entry
    $book = Book::create($validated);

    if (!$book) {
      dd("Error: Book not created");
    }

    return redirect()->route('books.index')->with('success', 'Book uploaded successfully!');
  }


  public function destroy($id)
  {
    // handle delete request to delete a ninja record from table
  }

  // edit() and update() for edit view and update requests
  // we won't be using these routes
}
