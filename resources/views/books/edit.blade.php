<x-layout>
    <div class="container mt-5">
        <h2>Edit Book</h2>
        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Book Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $book->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" name="author" class="form-control" value="{{ old('author', $book->author) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="category" class="form-control" value="{{ old('category', $book->category) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control">{{ old('description', $book->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Cover Image</label>
                <input type="file" name="cover_image" class="form-control">
                @if ($book->cover_image)
                    <img src="{{ asset('storage/' . $book->cover_image) }}" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update Book</button>
        </form>
    </div>
</x-layout>
