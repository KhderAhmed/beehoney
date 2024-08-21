<?php

namespace App\Http\Controllers;

use App\Models\Honey;
use Illuminate\Http\Request;

class HoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexhoney()
    {
        $data = Honey::all();
        return view('Admin.Honey.index',compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createhoney()
    {
        return view('Admin.Honey.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storehoney(Request $request)
    {
        $honey= new Honey();
        $honey ->name = $request->name;
        $honey ->price = $request->price;
        $honey ->country = $request->country;
        $honey ->type = $request->type;
        $honey ->qantylly = $request->qantylly;  
        $image = $request->image;
    
           if ($image) {
    
               $imagename = time() . '.' . $image->getClientOriginalExtension();
    
               $request->image->move('honeyimage', $imagename);
    
               $honey->image = $imagename;
             
           }
    
           $honey->save();  
    
                return redirect()->route('honey')->with('message','Successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edithoney(string $id)
    {
        $data = Honey::find($id);
        return view('Admin.Honey.update',compact('data'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatehoney(Request $request, string $id)
    {
        $honey = Honey::find($id);
        $honey ->name = $request->name;
        $honey ->price = $request->price;
        $honey ->country = $request->country;
        $honey ->type = $request->type;
        $honey ->qantylly = $request->qantylly;  
        $image = $request->image;
        if ($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('honeyimage', $imagename);

            $honey->image = $imagename;
        }

        $honey->save();

        return redirect()->route('honey')->with('message','Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyhoney(string $id)
    {
        $honey = Honey::find($id);

       $honey->delete();

    return redirect()->back()->with('message','Successfully');
    }
    public function stutaccpet($id)
    {
        $status = Honey::find($id);
   
        $status -> honey_status = 'active';
   
        $status->save();
   
        return redirect()->back()->with('message','Successfully');
    }
   
   
       public function stutasremove($id)
       {
           $status = Honey::find($id);
   
           $status -> honey_status = 'pending';
   
           $status->save();
   
           return redirect()->back()->with('message','Successfully');
       }
   }

