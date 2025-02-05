<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

// Delete all existing records from the books table
//  \App\Models\Book::truncate();

Storage::makeDirectory('public/cover_images');

        Book::factory(30)->create();
    }
}
