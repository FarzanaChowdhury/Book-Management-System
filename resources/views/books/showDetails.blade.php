{{-- <x-layout>

    <p>Cover image : {{$book['cover_image']?? 'Cover not found'}}</p>
<p>Book Name : {{$book['name']?? 'Book name not found'}}</p>
<p>Author : {{$book['author'] ?? 'Author not found'}}</p>
<p>Genre : {{$book['category'] ?? 'Genre not found'}}</p>
<p>Description : {{$book['description'] ?? 'Description not found'}}</p>

</x-layout>
--}}


<x-layout>
    <div class="container mt-5" >
        <div class="card shadow">
            <div class="card-body d-flex" style="padding: 2rem; background-color: #f0f1fa">
                <div>
                    <h2 class="card-title">{{ $book['name'] ?? 'Book name not found' }}</h2>
                    <p>
                        <img src="{{ asset('storage/' . $book->cover_image) }}" style="max-width: 200px; height: 300px; object-fit:cover" alt="Book Cover">
                    </p>

                </div>
                <div style="margin: 3rem">
                    <p><strong>Author:</strong> {{ $book['author'] ?? 'Author not found' }}</p>
                    <p><strong>Category:</strong> {{ $book['category'] ?? 'Category not found' }}</p>
                    <p><strong>Description:</strong> {{ $book['description'] ?? 'Description not found' }}</p>

                </div>
                {{-- <p><img src="{{ asset('storage/' . $book->cover_image) }}" alt="Cover image"> --}}

                </p>



            </div>
        </div>
    </div>

<div class="mt-4 d-flex flex-row-reverse">

  <form action="{{ route('books.destroy', $book->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger my-4">Delete Book</button>
  </form>
<div class="mt-4 mr-2">
  <a href="{{ route('books.edit', $book->id) }}" class="btn btn-success">Edit Book</a>
</div>
</div>



</x-layout>
