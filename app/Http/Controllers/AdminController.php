<?php

namespace App\Http\Controllers;
use App\Models\Bee;
use App\Models\Cart;
use App\Models\ConatctUs;
use App\Models\Customer;
use App\Models\Honey;
use App\Models\Others;
use App\Models\Queen;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Validator;

class AdminController extends Controller
{
    public function login()
    {
        return view('Admin.Auth.login');
    }
   public function postlogin(Request $request)
{
    $validator = Validator::make(request()->all(), [

        'email' => 'required|email',

        'password' => 'required|min:8',

    ]);
    
    if ($validator->fails()) {

        return redirect()->route('login')->with('error', $validator->errors());

    }
    $check = $request->all();
    
    if(Auth::guard('admin')->attempt(['email' =>  $check['email'], 'password' =>   $check['password']]))
    {
        return redirect()->route('home');
    }else{

        return back();
    }

}
public function home()
{
    $data['TotalUser'] = Customer::count();
    $data['Totalconact'] = ConatctUs::count();
    $data['sumCart'] = Cart::count();
    $data['sumbee'] = Bee::count();
    $data['sumQueen'] = Queen::count();
    $data['sumHoney'] = Honey::count();
    $data['sumOthers'] = Others::count();
   
    return view('Admin.dashbord.index',$data);
}

public function logout()
{
    Auth::guard('admin')->logout();

    return redirect()>route('login');
}





}

