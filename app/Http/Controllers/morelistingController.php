<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class morelistingController extends Controller
{
   public function morelisting($id){
        $products = DB::select('SELECT * FROM products WHERE id=?',[$id]);
        return view('home.morelisting',['products'=>$products]);
    }
}