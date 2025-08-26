<?php

namespace App\Http\Controllers;

use App\Models\User;

class AnalyticsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('status', compact('user'));
    }
}
