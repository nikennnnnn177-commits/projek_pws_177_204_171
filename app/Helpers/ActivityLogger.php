<?php

namespace App\Helpers;

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

class ActivityLogger
{
    public static function log($resource, $action, $description = null)
    {
        ActivityLog::create([
            'user_id'   => Auth::id(),
            'resource'  => $resource,
            'action'    => $action,
            'description' => $description
        ]);
    }
}
