<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function showLocation()
    {
        return view('location', ['title'=>'Location']);
    }
}
