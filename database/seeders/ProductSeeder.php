<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama' => 'Strawberry',
            'deskripsi' => 'Fresh langsung dari kebun',
            'harga' => '12000',
            'image' => 'product1.jpg',
        ]);

        Product::create([
            'nama' => 'Jeruk',
            'deskripsi' => 'Fresh langsung dari kebun',
            'harga' => '12000',
            'image' => 'product2.jpg',
        ]);

        Product::create([
            'nama' => 'Tomat',
            'deskripsi' => 'Fresh langsung dari kebun',
            'harga' => '12000',
            'image' => 'product3.jpg',
        ]);

        Product::create([
            'nama' => 'Apple',
            'deskripsi' => 'Fresh langsung dari kebun',
            'harga' => '12000',
            'image' => 'product4.jpg',
        ]);
    }
}
