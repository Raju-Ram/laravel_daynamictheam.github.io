<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
  public function add(){
    return view('backend/User/adduser');
  }

  public function addform(Request $request){
    $request->validate([
    'name'=>'required',
    'email'=>'required',
    'mobile'=>'required',
    'address'=>'required'
    ]);
    $adddata = new UserModel;
$adddata->name = $request->get('name');
$adddata->email = $request->get('email');
$adddata->mobile = $request->get('mobile');
$adddata->address = $request->get('address');

$adddata->save();

return redirect()->back();

  }

  public function addlist(){

    return view('backend/User/listuser');
  }

  public function showuserlist(){
    $User = UserModel::all();

    return view('backend/User/listuser',compact('User'));
}

public function edituserlist($id){
  $edituser =UserModel::select('name','email','mobile','address')
  ->where('id',$id)->first();
  return view('backend/User/edituser',compact('edituser'));

 }

 public function updateUser(Request $request,$id){
  $request->validate([
  'name'=>'required',
  'email'=>'required',
  'mobile'=>'required',
  'address'=>'required'

  ]);
  UserModel::where('id',$id)->update([
'name'=>$request->get('name'),
'email'=>$request->get('email'),
'mobile'=>$request->get('mobile'),
'address'=>$request->get('address'),

]);
return redirect()->back();

}

public function deleteUser($id){

  $deleteuser =UserModel::find($id);
  $deleteuser->delete();

  return redirect()->back();
}
}
