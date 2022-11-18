<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
class paymentController extends Controller
{
   public function payment(){
    $payments =payment::all();
    return view('admin.payment.payment', ['payments' =>$payments]);
   }

   public function process_payment(Request $request){
    $post =payment::find(1);
     $post->bank = $request->bank;
        $post->account_name = $request-> account_name;
        $post->account_number = $request-> account_number;
        $post->payment_terms = $request-> payment_terms;
        $post->status= $request-> status;
         $post->save();
    return redirect()->route('payment');
   }
}