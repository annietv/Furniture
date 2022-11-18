<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class moredepartController extends Controller
{
    public function moredepart($depart_name){
        $products = DB::select('SELECT * FROM products WHERE departments=?',[$depart_name]);
        return view('home.moredepart',['products'=>$products]);
    }
}