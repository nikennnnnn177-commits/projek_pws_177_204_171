<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        Order::create([
            'user_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'total_price' => 200000,
            'status' => 'pending'
        ]);
    }
}
