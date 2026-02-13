<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThingsController extends Controller
{
    public function index()
    {
        return view('things');
    }
}
