<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrendsController extends Controller
{
    public function index()
    {
        return view('trending');
    }
}
