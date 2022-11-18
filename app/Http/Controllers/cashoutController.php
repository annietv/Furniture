<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\payout;
class cashoutController extends Controller
{
   public function cashout($id){
     $products = DB::select('SELECT * FROM products WHERE id=?',[$id]);
        return view('home.cashout',['products'=>$products]);
    
   }
//     public function backcashout(){
//         return view('home.cashout');
    
//    }
public function destroyorder($id)
    {
         DB:: delete('DELETE FROM payouts WHERE id=?', [$id]);
         echo("order Deleted Successfully");
         return redirect()->route('neworder');
       
    }

   public function neworder(){
     $payouts = payout::all();
        return view('admin.order.newoder',['payouts'=>$payouts]);
    
   }
   public function process_cash(Request $request){
    $post= new payout();
        $post->fullname = $request->fullname;
        $post->email = $request->email;
        $post->phone = $request-> phone;
        $post->product_name = $request-> product_name;
        $post->current_price = $request-> current_price;
        $post->product_desc = $request-> product_desc;
        $post->color = $request-> color;
        $post->proimage = $request-> proimage;
        $post->comments = $request-> comments;
        $post->save();
    return redirect()->route('congrat');
        
   }
}