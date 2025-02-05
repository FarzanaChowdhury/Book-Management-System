
<x-layout>
<head>
<style>
        .pagination .page-link svg {
            width: 1.2rem;
            height: 1.2rem;
        }

        .pagination .page-link:hover svg {
            width: 1.5rem;
            height: 1px;
        }

        .pagination .page-link svg path {
            fill: #333;
        }
    </style>
</head>

    <h2>List of all books: </h2>
 

<form action="{{ route('books.index') }}" method="GET">
    <!-- Search Bar -->
    <input type="text" name="search" placeholder="Search books..." value="{{ request('search') }}">
    
    <!-- Author Dropdown -->
    <select name="author">
        <option value="">All Authors</option>
        @foreach ($authors as $author)
            <option value="{{ $author }}" {{ request('author') == $author ? 'selected' : '' }}>{{ $author }}</option>
        @endforeach
    </select>

    <!-- Category Dropdown -->
    <select name="category">
        <option value="">All Categories</option>
        @foreach ($categories as $category)
            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>{{ $category }}</option>
        @endforeach
    </select>

    <button type="submit" class="btn btn-primary">Filter</button>
</form>




    <div class="row g-4">
        @foreach($books as $book)
        <div class="col-md-4 mb-4"style="width: 100%, max-height: 10rem">
            <div class="card shadow-lg p-3" >
                <x-card href="/books/{{$book['id']}}">
                    <img src="{{ asset('storage/' . $book->cover_image) }}" class="card-img-top img-fluid mt-4 mb-4" style="height: 25rem; width: 75%; object-fit: cover; margin:auto" alt="...">
                    <h5 class="card-title m-auto"><strong>{{ $book['name'] }}</strong></h5>
<p class='m-auto'> {{$book['author']}}</p>

                </x-card>

                </li>

            </div>
        </div>
        @endforeach

        
    </div>

<div class="pagination-container m-4 d-flex justify-content-center">
    {{$books->links()}}
</div>

    

</x-layout>
