<x-layout>

<h2>Upload a New Book</h2>
  <form action="{{ route("books.store")}}" method="POST" class="form-control shadow p-3 mb-5 bg-white rounded" enctype="multipart/form-data">
    <!-- CSRF token for security -->
    @csrf

    
<div class="form-group m-6 p-6" >

    <label for="cover_image">Book Cover:</label>
    <input 
      type="file" 
      accept="image/*"
      id="cover_image" 
      class="form-control"
      name="cover_image" 
      required
    >

    <label for="name">Book Name:</label>
    <input 
      type="text" 
      id="name" 
      class="form-control"
      name="name" 
      required
    >

    <label for="author">Author Name:</label>
    <input 
      type="text" 
      id="author" 
      class="form-control"
      name="author" 
      required
    >

   


<label for="category">Category:</label>
<select id="category" class="form-control" name="category" required>
    <option value="" disabled selected>Select a Category</option>
    <option value="Adventure">Adventure</option>
    <option value="Fantasy">Fantasy</option>
    <option value="Romance">Romance</option>
    <option value="Comedy">Comedy</option>
    <option value="Horror">Horror</option>
    <option value="Educational">Educational</option>
    <option value="Thriller">Thriller</option>
</select>

    <label for="description">Description:</label>
    <textarea
      rows="5"
      id="description" 
      class="form-control"
      name="description" 
      required
    ></textarea>

 </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Upload</button>

    <!-- validation errors -->
    
  </form>
</x-layout>