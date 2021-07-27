<?php

namespace App\Http\Controllers;

class TimeController extends Controller
{
    public function get()
    {
        return response()->json([
            'now' => now(),
        ]);
    }
}
