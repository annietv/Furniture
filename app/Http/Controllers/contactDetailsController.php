<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactDetails;

class contactDetailsController extends Controller
{
   public function contactdetails(){
    $contact_details = contactDetails::all();
    return view('admin.page.contactdetails', ['contact_details' =>$contact_details]);
   }

   public function process_contact_dteails(Request $request){
    $post = contactDetails::find(1);
    $post->email=$request->email;
    $post->phoneone=$request->phoneone;
    $post->phonetwo=$request->phonetwo;
    $post->office_address_one=$request->office_address_one;
    $post->office_address_two=$request->office_address_two;
    $post->save();
    return redirect()->route('contactdetails');
   }
}