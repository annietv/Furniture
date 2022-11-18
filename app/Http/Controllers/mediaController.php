<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mediaController extends Controller
{
    public function media(){
        return view('admin.page.media');
    }
}