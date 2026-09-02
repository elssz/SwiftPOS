<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop ASUS ROG',
                'description' => 'Laptop gaming asus republic of gamers.',
                'price' => 25000000,
                'stock' => 10,
                'category' => 'Elektronik'
            ],
            [
                'name' => 'iPhone 15 Pro Max',
                'description' => 'Smartphone Apple terbaru 2024.',
                'price' => 25000000,
                'stock' => 15,
                'category' => 'Elektronik'
            ],
            [
                'name' => 'Meja Kerja Minimalis',
                'description' => 'Meja kerja berbahan kayu jati asli.',
                'price' => 1500000,
                'stock' => 20,
                'category' => 'Furniture'
            ],
            [
                'name' => 'Kursi Ergonomis',
                'description' => 'Kursi kantor yang nyaman untuk punggung, anti pegal.',
                'price' => 2500000,
                'stock' => 25,
                'category' => 'Furniture'
            ],
            [
                'name' => 'Kopi Arabica Gayo',
                'description' => 'Kopi bubuk asli Aceh Gayo 250gr.',
                'price' => 75000,
                'stock' => 100,
                'category' => 'Makanan & Minuman'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
