<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
class aboutController extends Controller
{
   public function about(){
       $abouts=about::all();
        return view('admin.page.about', ['abouts'=>$abouts]);
   }
   public function process_about(Request $request){
        $post = about::find(1);
        $post->title= $request ->title;
        $post->aboutdesc = $request ->aboutdesc;
        $post->status = $request ->status;
        if($request->file('proimage')){
            $file= $request->file('proimage');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/about'), $filename);
            $post['proimage']= $filename;
        } 
        $post->save();
        return redirect()->route('about');
    }
}