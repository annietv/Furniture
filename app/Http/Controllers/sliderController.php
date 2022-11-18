<?php

namespace App\Http\Controllers;
use App\Models\siteSlider;
use DB;
use Illuminate\Http\Request;

class sliderController extends Controller
{
     public function slider()
    {
        return view('admin.page.slider');
    }
     public function viewslider(){
      $site_sliders = siteSlider::all();
        return view('admin.views.viewslider', ['site_sliders' =>$site_sliders]);
   } 
 public function editslider($id)
    {
        $site_sliders = DB:: select('SELECT * FROM site_sliders WHERE id=?', [$id]);
        return view('admin.views.editslider', ['site_sliders' =>$site_sliders]);
    }
    public function destroyslider($id)
    {
         DB:: delete('DELETE FROM site_sliders WHERE id=?', [$id]);
         echo("Slider Deleted Successfully");
         return redirect()->route('viewslider');
       
    }
     public function process_slider(Request $request){
        $post= new siteSlider();
        $post->title = $request->title;
        $post->contents = $request-> contents;
        $post->status = $request-> status;
        if($request->file('proimage')){
            $file= $request->file('proimage');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/slider'), $filename);
            $post['proimage']= $filename;
        }
        $post->save();
    return redirect()->route('slider');
        
    }

    public function updateslider(Request $request, $id){
        $post= siteSlider::find($id);
        $post->title = $request->title;
        $post->contents = $request-> contents;
        $post->status = $request-> status;
        if($request->file('proimage')){
            $file= $request->file('proimage');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('images/slider'), $filename);
            $post['proimage']= $filename;
        }
        $post->save();
    return redirect()->route('viewslider');
        
    }
}