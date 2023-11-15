<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\newpost;
use Carbon\Carbon;
class Usercontroller extends Controller
{
    public function index(Request $request){
        // $imagePath = $request->file('uimage')->store('images', 'public');

        $file=new newpost;
        $file->name=$request->uname;
        $file->message=$request->umessage;
        $file->time = $request->time;
        $file->save();

        return back();
    }

    function post(){
        $post=newpost::all();
        return view('post',compact('post'));
    }
}
