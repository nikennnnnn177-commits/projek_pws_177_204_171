<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    public function run()
    {
            Transaction::firstOrCreate(
        ['order_id' => 1],
        [
            'payment_method' => 'transfer',
            'amount' => 200000,
            'status' => 'success'
        ]
    );
    }
}
