<x-layout>

    <p>Cover image : {{$book['cover_image']?? 'Cover not found'}}</p>
    <p>Book Name : {{$book['name']?? 'Book name not found'}}</p>
    <p>Author : {{$book['author'] ?? 'Author not found'}}</p>
    <p>Genre : {{$book['category'] ?? 'Genre not found'}}</p>
    <p>Description : {{$book['description'] ?? 'Description not found'}}</p>
    
</x-layout>

