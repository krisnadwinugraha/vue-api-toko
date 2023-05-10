<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'Cookies',
            'image' => 'category1.jpg',
        ]);

        Category::create([
            'nama' => 'Peanuts',
            'image' => 'category2.jpg',
        ]);

        Category::create([
            'nama' => 'Pizza',
            'image' => 'category3.jpg',
        ]);

        Category::create([
            'nama' => 'Cake',
            'image' => 'category4.jpg',
        ]);
    }
}
