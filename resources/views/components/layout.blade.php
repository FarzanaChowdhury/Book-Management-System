
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
        <div class="container d-flex justify-content-between align-items-center">
            <h1>Book Management</h1>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/books">All Books</a>
                </li>

                @auth
                @if(in_array(Auth::user()->role, ['admin', 'super admin', 'author']))
                <li class="nav-item">
                    <a class="nav-link text-white" href="/books/upload">Upload New Book</a>
                </li>
                @endif


                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </header>

    <main class="container mt-4">
        {{ $slot }}
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
