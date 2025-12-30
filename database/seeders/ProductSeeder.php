<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::insert([
            [
                'name' => 'Laptop',
                'price' => 12000000,
                'category_id' => 1
            ],
            [
                'name' => 'Kaos',
                'price' => 150000,
                'category_id' => 2
            ]
        ]);
    }
}
