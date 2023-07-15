<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cmc;

class CmcController extends Controller
{
    public function addcmc(){
        return view('backend/Cmc/addcmc');
    }
    public function insertcmc(Request $request){
        $request->validate([
        'title'=>'required',
        'desc'=>'required',
        'status'=>'required',       
        ]);
        $adddata = new Cmc;
    $adddata->title = $request->get('title');
    $adddata->desc = $request->get('desc');
    $adddata->status = $request->get('status');
    $adddata->save();
    
    return redirect()->back();
    
      }

      public function showcmclist(){

        $User = Cmc::all();

        return view('backend/Cmc/listcmc',compact('User'));
    }

    public function status($id){
        $product=Cmc::select('status')->where('id',$id)->first();
        if($product->status=='1'){
            $status='0';
        }
        else{
            $status='1';
        }
        $value=array('status'=>$status);
        Cmc::where('id',$id)->update($value);

        return redirect()->back();

    }
}
