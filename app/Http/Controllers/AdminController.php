<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'You are logged in as an admin!']);
    }
}

