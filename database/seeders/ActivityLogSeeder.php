<?php

namespace Database\Seeders;

use App\Models\ActivityLog;
use Illuminate\Database\Seeder;

class ActivityLogSeeder extends Seeder
{
    public function run()
    {
        ActivityLog::create([
            'user_id' => 1,
            'resource' => 'system',
            'action' => 'INIT',
            'description' => 'Initial log entry'
        ]);
    }
}
