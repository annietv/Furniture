<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\statement;
class statementController extends Controller
{
    public function statement(){
        $statements=statement::all();
        return view('admin.page.statement', ['statements'=>$statements]);
    }

    public function process_statement(Request $request){
        $post= statement::find(1);
        $post->mission = $request->mission;
        $post->vision = $request->vision;
        $post->coreValue = $request-> coreValue;
        $post->status = $request-> status;
        $post->save();
    return redirect()->route('statement');
        
    }
}