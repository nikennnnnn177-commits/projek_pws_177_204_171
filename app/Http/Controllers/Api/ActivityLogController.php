<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Helpers\ApiFormatter;

class ActivityLogController extends Controller
{
    public function index()
    {
        $data = ActivityLog::latest()->get();
        return ApiFormatter::createJson(
            200,
            'Activity logs retrieved',
            $data
        );
    }
}
