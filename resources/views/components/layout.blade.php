<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</html>