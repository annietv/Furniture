<?php

namespace App\Http\Controllers;
use App\Models\mailset;
use Illuminate\Http\Request;

class mailConttroller extends Controller
{
     public function emails()
    {
         $mailsets=mailset::all();
        return view('admin.page.mail', ['mailsets'=>$mailsets]);
       
    }

    public function process_mail(Request $request){
        $post = mailset::find(1);
        $post->smtp = $request->smtp;
        $post->host = $request-> host;
        $post->port = $request-> port;
        $post->username = $request-> username;
        $post->psw = $request-> psw;
        $post->save();
    return redirect()->route('emails');
        
    }
}