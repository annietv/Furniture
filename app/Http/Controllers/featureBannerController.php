<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class featureBannerController extends Controller
{
     public function featurebanner()
    {
        return view('admin.page.featurebanner');
    }
}