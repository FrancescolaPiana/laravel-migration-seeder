<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class Train extends Controller
{
    public function index()
    {
        $train = Train::all();
        return view('home', compact('trains'));
    }
}