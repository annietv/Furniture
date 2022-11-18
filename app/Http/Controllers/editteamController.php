<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ourteam;
use DB;
class editteamController extends Controller
{
     public function editteam($id)
    {
         $ourteams=select('SELECT * FROM ourteams WHERE id=?', [$id]);
        return view('admin.views.editteam', ['ourteams'=>$ourteams]);
       
    }

    public function destroy($id)
    {
         DB:: delete('DELETE FROM ourteams WHERE id=?', [$id]);
         echo("Team Deleted Successfully");
         return redirect()->route('viewteams');
       
    }

    public function updateteam(Request $request, $id){
        $post = ourteam::find($id);
        $post->fullname = $request->fullname;
        $post->positions = $request-> positions;
        $post->contents = $request-> contents;
        $post->status = $request-> status;
       if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/team'), $filename);
            $post['image']= $filename;
        } 
        $post->save();
    return redirect()->route('viewteams');
        
    }
}