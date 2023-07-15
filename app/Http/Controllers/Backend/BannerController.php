<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function addbanner(){
        return view('backend/Banner/addbanner');
    }

    public function insertbanner(Request $request){
        //echo "<pre>"; print_r($request->all()); die;
        $request->validate([
        'title'=>'required',
        'image'=>'required'
       
        ]);
        $adddata =new Banner();
        $adddata->title = $request->get('title');
        if($request->hasFile('image')){
            $photo=$request->file('image');

            $photoName=rand(1000,9999).'.'.$photo->getClientOriginalExtension();

            $photo->move(public_path('users'),$photoName);
        }
        $adddata->image=$photoName;
        $adddata->save();
        
}

public function showbannerlist(){
    $User = Banner::all();

    return view('backend/Banner/listbanner',compact('User'));
}
}
