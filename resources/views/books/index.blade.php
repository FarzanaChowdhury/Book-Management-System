<x-layout>
    <h1>find info</h1>
    <h2>List of all books: </h2>
    <button>Filter</button>
    <input type="text"><button class='search'>Search</button>


@foreach($books as $book)
    <li><p>{{$book['name']}}</p>
    <a href="/books/{{$book['name']}}" class="details">View Details</a></li>

    <li>
    <x-card href="/books/{{$book['name']}}">
          <h3>{{ $book['name'] }}</h3>

        </x-card>
    </li>
@endforeach

</x-layout>
