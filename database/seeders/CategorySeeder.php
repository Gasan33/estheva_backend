<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::create([
            'name' => 'root',
            'slug' => 'root',
            'visibility' => false,
        ]);
        $category->image()->create(['path' => 'public/storage/categories/0.png']);

        $category = Category::create([
            'name' => 'Slimming',
            'slug' => 'slimming',
            'visibility' => false,
        ]);
        $category->image()->create(['path' => 'public/storage/categories/0.png']);

        $category = Category::create([
            'name' => 'Fat',
            'slug' => 'fat ',
            'visibility' => false,
        ]);
        $category->image()->create(['path' => 'public/storage/categories/1.png']);
    }
}
