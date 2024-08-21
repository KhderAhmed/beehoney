<?php

namespace App\Http\Controllers;
use App\Models\Bee;
use App\Models\Honey;
use App\Models\Others;
use App\Models\Queen;
use App\Models\Customer;
use Auth;
use Hash;
use Illuminate\Http\Request;

class CustomerCountroller extends Controller
{
  
    public function logincustomer()
    {
        return view('Auth.login');
    }
   public function custlogin(Request $request)
{
    $check = $request->all();
    if(Auth::guard('customer')->attempt(['email' =>$check['email'], 'password' =>   $check['password']]))
    {
        return redirect()->route('homepage');
    }else{

        return back();
    }

}
public function homepagesc(){
    
$data['sumbee'] = Bee::count();
$data['sumQueen'] = Queen::count();
$data['sumHoney'] = Honey::count();
$data['sumOthers'] = Others::count();
   $data['bees'] = Bee::where('bee_status' ,'=','active')->get();
    $data['honeys'] = Honey::where('honey_status' ,'=','active')->get();
    $data['others'] = Others::where('others_status' ,'=','active')->get();
     $data['Queens'] = Queen::where('queen_status' ,'=','active')->get();
    return view('beehoney.home',$data);
}
public function logoutcustomer()
{
    Auth::guard('customer')->logout();

    return redirect('/');
}
public function registercustomer()
{
    return view('Auth.register');
}


public function postregister(Request $request)
{
    Customer::insert([
'name'=>$request->name,
'email'=>$request->email,
'password'=>Hash::make($request->password),
'phone'=>$request->phone,
'addrees'=>$request->addrees,
    ]);

    return redirect()->route('homepage');
}

public function editmyprofile(Request $request)
{

     $userprofile = Customer::find(Auth::guard('customer')->user()->id);


    return view('ProfileUser.edituser',compact('userprofile'));

}





public function storeeyprofile(Request $request)
{

$uservalted = request()->validate([

'email' => 'required|unique:customers,email,'.Auth::guard('customer')->user()->id
]);

$uservalted = Customer::find(Auth::guard('customer')->user()->id);
$uservalted ->name = $request->name;
$uservalted ->email = $request->email;
$uservalted ->phone = $request->phone;
$uservalted ->addrees = $request->addrees;
if (!empty($request->password)) {

$uservalted ->password = Hash::make($request->password);
}

$uservalted->save();

return redirect()->route('homepage')->with('success',' The Profile Has Been Update');

}
}
