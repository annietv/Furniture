<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainContactController extends Controller
{
   public function contactus(){
    return view('home.contact');
   }
}