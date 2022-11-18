<?php

namespace App\Http\Controllers;
use App\Models\general;
use Illuminate\Http\Request;

class generalController extends Controller
{
    public function general(){
        $gens=general::all();
        return view('admin.page.general', ['generals'=>$gens]);
    } 
    
    public function update(Request $request){
        $post = general::find(1);
        $post->businessName = $request ->businessName;
        $post->websiteName = $request ->websiteName;
        $post->timeZone = $request ->timeZone;
        $post->countrys = $request ->countrys;
        $post->currency = $request ->currency;
        if($request->file('siteLogo')){
            $file= $request->file('siteLogo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/'), $filename);
            $post['siteLogo']= $filename;
        } 
        if($request->file('favicon')){
            $file= $request->file('favicon');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $post['favicon']= $filename;
        } 
        if($request->file('preloader')){
            $file= $request->file('preloader');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $post['preloader']= $filename;
        } 
        $post-> busAddress = $request -> busAddress;
        $post->save();
        return redirect()->route('general');
    }
}