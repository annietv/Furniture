<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class congratContoller extends Controller
{
    public function congrat(){
        return view('home.congrat');
    }
}