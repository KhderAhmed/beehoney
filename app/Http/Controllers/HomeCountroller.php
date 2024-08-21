<?php

namespace App\Http\Controllers;

use App\Models\ConatctUs;
use App\Models\StaticPages;
use Illuminate\Http\Request;
use App\Models\Bee;
use App\Models\Honey;
use App\Models\Others;
use App\Models\Queen;
class HomeCountroller extends Controller
{
    public function indexpage()
    {
      $data['sumbee'] = Bee::count();
      $data['sumQueen'] = Queen::count();
      $data['sumHoney'] = Honey::count();
      $data['sumOthers'] = Others::count();
      $data['bees'] = Bee::where('bee_status' ,'=','active')->get();
      $data['honeys'] = Honey::where('honey_status' ,'=','active')->get();
      $data['others'] = Others::where('others_status' ,'=','active')->get();
       $data['Queens'] = Queen::where('queen_status' ,'=','active')->get();

       return view("index",$data);
    }

    public function aboutpage()
    {
       return view("about");
    }

    public function  contactpage()
    {
      $data['staticcompoments'] = StaticPages::all();
       return view("contact",$data);
    }

    public function contactpagestore(Request $request)
    {
      ConatctUs::insert([
    'name'=>$request->name,
    'email'=>$request->email,
    'subject'=>$request->subject,
    'message'=>$request->message,
        ]);
    
        return redirect()->back();
    }
    
 






}
