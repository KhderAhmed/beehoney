<?php

namespace App\Http\Controllers;

use App\Models\Bee;
use Illuminate\Http\Request;
use Str;

class BeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexbee()
    {
        // $data = Bee::where('bee_status','=','active');
        $data = Bee::all();
        return view('Admin.Bee.index',compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createbee()
    {
       
        return view('Admin.Bee.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storebee(Request $request)
    {
    $bee= new Bee();
    $bee ->name = $request->name;
    $bee ->price = $request->price;
    $bee ->country = $request->country;
    $bee ->type = $request->type;
    $bee ->qantylly = $request->qantylly;  
    $image = $request->image;

       if ($image) {

           $imagename = time() . '.' . $image->getClientOriginalExtension();

           $request->image->move('beeimage', $imagename);

           $bee->image = $imagename;
         
       }

       $bee->save();  

            return redirect()->route('bee')->with('message','Successfully');
           
           }
        


    /**
     * Show the form for editing the specified resource.
     */
    public function editbee(string $id)
    {
        $data = Bee::find($id);

       return view('Admin.Bee.update',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function updatebee(Request $request, string $id)
    {
        $bee = Bee::find($id);
        $bee ->name = $request->name;
        $bee ->price = $request->price;
        $bee ->country = $request->country;
        $bee ->type = $request->type;
        $bee ->qantylly = $request->qantylly;  
        $image = $request->image;
        if ($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('beeimage', $imagename);

            $bee->image = $imagename;
        }

        $bee->save();

        return redirect()->route('bee')->with('message','Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroybee(string $id)
    {
        
    $bee = Bee::find($id);

    $bee->delete();

    return redirect()->back()->with('message','Successfully');
    }

    public function stutaccpet($id)
 {
     $status = Bee::find($id);

     $status -> bee_status = 'active';

     $status->save();

     return redirect()->back()->with('message','Successfully');
 }


    public function stutasremove($id)
    {
        $status = Bee::find($id);

        $status -> bee_status = 'pending';

        $status->save();

        return redirect()->back()->with('message','Successfully');
    }
}
