<?php

namespace App\Http\Controllers;
use App\Models\ourteam;
use DB;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function team(){
        return view('admin.page.team');
    } 

    public function mainteam(){
        $ourteams =ourteam::all();
        return view('home.team', ['ourteams' =>$ourteams]);
         
    }
    public function moreteam($id){
        $ourteams =DB::select('SELECT * FROM ourteams WHERE id=?',[$id]);
        return view('home.moreteam', ['ourteams' =>$ourteams]);
         
    }
    public function process_team(Request $request){
        $post= new ourteam();
        $post->fullname = $request->fullname;
        $post->positions = $request->positions;
        $post->contents = $request-> contents;
        $post->status = $request-> status;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/team'), $filename);
            $post['image']= $filename;
        }
        $post->save();
    return redirect()->route('team');
        
    }
}