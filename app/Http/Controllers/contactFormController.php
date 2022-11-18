<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class contactFormController extends Controller
{
    public function contact(){
        return view('home.contact');
    }
    
     public function viewcontact(){
        $contacts = contact::all();
        return view('admin.page.contact', ['contacts' =>$contacts]);
    }
    public function process_form(Request $request)
    {
       $post =new contact();
      $post->fullname = $request->fullname;
        $post->email = $request->email;
        $post->subject = $request-> subject;
        $post->contents = $request-> contents;
    $post->save();
    return redirect()->route('contact_form');
   }
}