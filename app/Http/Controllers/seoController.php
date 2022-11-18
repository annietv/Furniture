<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seo;
class seoController extends Controller
{
    public function seo(){
        $seos=seo::all();
        return view('admin.page.seo', ['seos'=>$seos]);
    }

    public function process_seo(Request $request){
        $post = seo::find(1);
        $post->title = $request->title;
        $post->sitedesc = $request-> sitedesc;
        $post->keyword = $request-> keyword;
        $post->analytics = $request-> analytics;
        $post->verification = $request-> verification;
        $post->fbusiness = $request-> fbusiness;
        $post->fpixel = $request-> fpixel;
       
        $post->save();
    return redirect()->route('seo');
        
    }
}