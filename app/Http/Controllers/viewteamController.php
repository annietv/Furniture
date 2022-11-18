<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ourteam;
class viewteamController extends Controller
{
   public function viewteams(){
     $ourteams =ourteam::all();
        return view('admin.views.viewteam', ['ourteams'=>$ourteams]);
   } 
}