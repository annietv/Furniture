<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\statement;

class MainAboutController extends Controller
{
   public function Mainabout(){
    $abouts =about::all();
    return view('home.about', ['abouts' => $abouts]);
   }
//    public function statement(){
//     $statements =statement::all();
//     return view('home.statement', ['statements' => $statements]);
//    }
}