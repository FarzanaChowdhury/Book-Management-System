{{-- <x-layout>

    <p>Cover image : {{$book['cover_image']?? 'Cover not found'}}</p>
    <p>Book Name : {{$book['name']?? 'Book name not found'}}</p>
    <p>Author : {{$book['author'] ?? 'Author not found'}}</p>
    <p>Genre : {{$book['category'] ?? 'Genre not found'}}</p>
    <p>Description : {{$book['description'] ?? 'Description not found'}}</p>
    
</x-layout>
 --}}


<x-layout>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body">
                <h2 class="card-title">{{ $book['name'] ?? 'Book name not found' }}</h2>
                <p><strong>Author:</strong> {{ $book['author'] ?? 'Author not found' }}</p>
                <p><strong>Category:</strong> {{ $book['category'] ?? 'Category not found' }}</p>
                <p><strong>Description:</strong> {{ $book['description'] ?? 'Description not found' }}</p>
                <p><strong>Cover Image:</strong> 
                    @if(isset($book['cover_image']))
                        <img src="{{ $book['cover_image'] }}" class="img-fluid" alt="Book Cover">
                    @else
                        Cover not found
                    @endif
                </p>
            </div>
        </div>
    </div>
</x-layout>
