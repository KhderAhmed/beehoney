<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Auth;
use Hash;
use Illuminate\Http\Request;

class ProfileCountroller extends Controller
{
  public function my_account(Request $request)
        {

             $user = Admin::find(Auth::guard('admin')->user()->id);
    
    
            return view('admin.Profile.edit',compact('user'));
   
        }



        

public function my_account_stor(Request $request)
{

$uservalted = request()->validate([

    'email' => 'required|unique:admins,email,'.Auth::guard('admin')->user()->id
]);

$uservalted = Admin::find(Auth::guard('admin')->user()->id);
$uservalted ->name = $request->name;
$uservalted ->email = $request->email;

if (!empty($request->password)) {

$uservalted ->password = Hash::make($request->password);
}

$uservalted->save();

return redirect()->route('home')->with('success',' The Profile Has Been Update');

}

}


