<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function getHome()
    {
        return view('home'); // asegurate de tener resources/views/home.blade.php
    }
}
