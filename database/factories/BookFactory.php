<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    // public function definition(): array
    // {
    //     return [
    //         'name' => fake()->word(),
    //         'author' => fake()->name(),
    //         'category' => fake()-> randomElement(['Comedy', 'Adventure', 'Educational', 'Romance', 'Sci-fi', 'Thriller', 'Fantasy']),
    //         'cover_image' => function() {
    //         Storage::fake('public'); // Ensure storage is accessible
    //         return UploadedFile::fake()->image('book_cover.jpg')->store('cover_images', 'public');
    //     },
    //         'description' =>fake()->realText(100),
    //     ];
    // }


    public function definition(): array
    {
        // Path where you store your real images in storage/app/public/seed_images
        $imagePath = storage_path('app/public/seed_images');
        
        // Check if the directory exists
        if (!File::exists($imagePath)) {
            throw new \Exception("Directory not found: $imagePath");
        }
        
        // Get all image files from the directory
        $images = File::allFiles($imagePath);
        
        // Select a random image from the available ones
        $randomImage = $images[array_rand($images)];
        
        // Create a path to store the image in 'cover_images' folder under public storage
        $coverImagePath = 'cover_images/' . basename($randomImage);
        
        // Store the selected image to public storage and save its relative path to the database
        Storage::disk('public')->put($coverImagePath, File::get($randomImage));
    
        // Return the definition array for seeding
        return [
            'name' => fake()->word(),
            'author' => fake()->name(),
            'category' => fake()->randomElement(['Comedy', 'Adventure', 'Educational', 'Romance', 'Sci-fi', 'Thriller', 'Fantasy']),
            'cover_image' => $coverImagePath, // Store relative path in database
            'description' => fake()->realText(100),
        ];
    }


}