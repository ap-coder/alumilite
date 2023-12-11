<?php

namespace App\Http\Controllers;

use App\Models\HealthCheck;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AwsHealthChecksController extends Controller
{
    public function deployed()
    {
        return response()->json([
            'status' => true,
            'message' => 'Deployed Successfully!',
        ], 200);
    }
}