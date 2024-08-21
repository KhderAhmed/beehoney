<?php

namespace App\Http\Controllers;

use App\Models\Others;
use Illuminate\Http\Request;

class OthersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexothers()
    {
        
        $data = Others::all();

        return view('Admin.Others.index',compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createothers()
    {
        return view('Admin.Others.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeothers(Request $request)
    {
        $others= new Others();
        $others ->name = $request->name;
        $others ->price = $request->price;
        $others ->country = $request->country;
        $others ->type = $request->type;
        $others ->qantylly = $request->qantylly;  
        $image = $request->image;
    
           if ($image) {
    
               $imagename = time() . '.' . $image->getClientOriginalExtension();
    
               $request->image->move('othersimage', $imagename);
    
               $others->image = $imagename;
             
           }
    
           $others->save();  
    
                return redirect()->route('others')->with('message','Successfully'); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editothers(string $id)
    {
        $data = Others::find($id);
        return view('Admin.Others.update',compact('data'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateothers(Request $request, string $id)
    {
        $others = Others::find($id);
        $others ->name = $request->name;
        $others ->price = $request->price;
        $others ->country = $request->country;
        $others ->type = $request->type;
        $others ->qantylly = $request->qantylly;  
        $image = $request->image;
    
           if ($image) {
    
               $imagename = time() . '.' . $image->getClientOriginalExtension();
    
               $request->image->move('othersimage', $imagename);
    
               $others->image = $imagename;
             
           }
    
           $others->save();  
    
                return redirect()->route('others')->with('message','Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyothers(string $id)
    {
        $others = Others::find($id);

        $others->delete();
 
     return redirect()->back()->with('message','Successfully');
    }
    public function stutaccpet($id)
    {
        $status = Others::find($id);
   
        $status -> others_status = 'active';
   
        $status->save();
   
        return redirect()->back()->with('message','Successfully');
    }
   
   
       public function stutasremove($id)
       {
           $status = Others::find($id);
   
           $status -> others_status = 'pending';
   
           $status->save();
   
           return redirect()->back()->with('message','Successfully');
       }
}
