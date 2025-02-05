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
                <input type="text" name="author" class="form-control" value="{{ old('author', $book->author ?? Auth::user()->name) }}" @if(Auth::user()->role === 'Author') readonly @endif required>
            </div>


            <div class="mb-3">

                <label for="category">Category:</label>
                <select id="category" class="form-control" name="category" required>
                    <option value="{{ old('category', $book->category) }}" disabled selected>{{ old('category', $book->category) }}</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Romance">Romance</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Horror">Horror</option>
                    <option value="Educational">Educational</option>
                    <option value="Thriller">Thriller</option>
                </select>

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
