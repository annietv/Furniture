<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\department;
use DB;
class productController extends Controller
{
     public function product()
    {
         $departments =department::all();
   return view('admin.products.product' , ['departments'=>$departments]);
    }
     public function viewproduct(){
     $products =product::all();
        return view('admin.products.viewproduct', ['products'=>$products]);
   } 

   public function destroyproduct($id)
    {
         DB:: delete('DELETE FROM products WHERE id=?', [$id]);
         echo("Products Deleted Successfully");
         return redirect()->route('viewproduct');
       
    }

    
    
public function editproduct($id){
     $products =DB:: select('SELECT * FROM products WHERE id=?', [$id]);
        return view('admin.products.editproduct', ['products'=>$products]);
   } 
   public function update_product(Request $request, $id){
        $post= product::find($id);
        $post->product_name = $request->product_name;
        $post->departments = $request->departments;
        $post->quantity = $request-> quantity;
        $post->initial_price = $request-> initial_price;
        $post->current_price = $request-> current_price;
        $post->product_desc = $request-> product_desc;
        if($request->file('proimage')){
            $file= $request->file('proimage');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/products'), $filename);
            $post['proimage']= $filename;
        }
        $post->save();
    return redirect()->route('viewproduct');
        
    }
    
    public function process_product(Request $request){
        $post= new product();
        $post->product_name = $request->product_name;
        $post->departments = $request->departments;
        $post->quantity = $request-> quantity;
        $post->initial_price = $request-> initial_price;
        $post->current_price = $request-> current_price;
        $post->product_desc = $request-> product_desc;
        if($request->file('proimage')){
            $file= $request->file('proimage');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/products'), $filename);
            $post['proimage']= $filename;
        }
        $post->save();
    return redirect()->route('product');
        
    }
}