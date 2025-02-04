<x-layout>



    <h1>find info</h1>
    <h2>List of all books: </h2>
    <button>Filter</button>
    <input type="text"><button class='search'>Search</button>

<div class="row g-4">
@foreach($books as $book)
<div class="col-md-4 mb-4">
<div class="card shadow-lg p-3" style="width: 100%">
    <x-card href="/books/{{$book['name']}}">
    <img src='{{$book['cover_image']}}' class="card-img-top" alt="...">
          <h5 class="card-title">{{ $book['name'] }}</h5>

        </x-card>
    </li>

    </div>
    </div>
@endforeach
</div>

{{-- 
<form action="{{ route('books.index') }}" method="GET">
    <select name="author">
        <option value="">Select Author</option>
        @foreach($authors as $author)
            <option value="{{ $author }}" {{ request('author') == $author ? 'selected' : '' }}>
                {{ $author }}
            </option>
        @endforeach
    </select>

    <select name="category">
        <option value="">Select Category</option>
        @foreach($categories as $category)
            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                {{ $category }}
            </option>
        @endforeach
    </select>

    <button type="submit">Filter</button>
</form>
 --}}




 {{$books->links()}}

</x-layout>
