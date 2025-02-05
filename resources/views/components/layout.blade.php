{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
      <header>
    <nav>
      <h1>Book Management</h1>
      <a href="/books"> 
        All Books
      </a>
      <a href="/books/upload">
        Upload New Book
      </a>
    </nav>
  </header>

  <main class="container">
    {{ $slot }}
  </main>
</body>
</html> --}}


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Management</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white p-3">
        {{-- <nav class="container d-flex justify-content-between">
            <h1>Book Management</h1>
            <div>
                <a href="/books" class="btn btn-light me-2">All Books</a>
                <a href="/books/upload" class="btn btn-primary">Upload New Book</a>

            </div>
        </nav> --}}
<div class="container d-flex justify-content-between">
<h1>Book Management</h1>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="/books">All Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/books/upload">Upload New Book</a>
  </li>

</ul>
</div>

    </header>








    <main class="container mt-4">
        {{ $slot }}
    </main>

    <!-- Bootstrap JS (optional if needed for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
