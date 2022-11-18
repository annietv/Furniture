<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\socialMedia;
class socialMediaController extends Controller
{
    public function socialMedia(){
         $socialMedia=socialMedia::all();
        return view('admin.page.socialMedia', ['socialMedia'=>$socialMedia]);
       
    }
    public function process_social(Request $request){
        $post = socialMedia::find(1);
        $post->facebook = $request->facebook;
        $post->instagram = $request-> instagram;
        $post->linkedin = $request-> linkedin;
        $post->twitter = $request-> twitter;
        $post->google = $request-> google;
        $post->save();
    return redirect()->route('socialMedia');
        
    }
}