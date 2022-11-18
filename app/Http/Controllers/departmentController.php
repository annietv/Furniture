<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department;
use DB;
class departmentController extends Controller
{
     public function department()
    {
   return view('admin.products.department');
    }

    public function viewdepartment(){
        $departments =department::all();
        return view('admin.products.viewdepartment', ['departments' => $departments]);
    }

    public function editdepartment($id){
        $departments =DB:: select('SELECT * FROM departments WHERE id=?', [$id]);
        return view('admin.products.editdepartment', ['departments' => $departments]);
    }

    public function destroydepartment($id)
    {
         DB:: delete('DELETE FROM departments WHERE id=?', [$id]);
         echo("Department Deleted Successfully");
         return redirect()->route('viewdepartment');
       
    }

    public function update_department(Request $request, $id){
        $post= department::find($id);
        $post->depart_name = $request->depart_name;
        $post->contents = $request->contents;
        $post->status = $request-> status;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/department'), $filename);
            $post['image']= $filename;
        }
        $post->save();
    return redirect()->route('viewdepartment');
        
    }
    public function process_department(Request $request){
        $post= new department();
        $post->depart_name = $request->depart_name;
        $post->contents = $request->contents;
        $post->status = $request-> status;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/department'), $filename);
            $post['image']= $filename;
        }
        $post->save();
    return redirect()->route('viewdepartment');
        
    }
}