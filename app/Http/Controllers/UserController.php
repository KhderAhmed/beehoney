<?php

namespace App\Http\Controllers;

use App\Models\ConatctUs;
use App\Models\Customer;
use App\Models\StaticPages;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function indexuser()
    {
        
        $data = Customer::all();
        
        return view('Admin.Users.index',compact('data'));  
    }

    public function indexContactUs()
    {
        
        $data['data'] = ConatctUs::all();
       

        return view('Admin.ContactUs.index',$data);  
    }

    
}





