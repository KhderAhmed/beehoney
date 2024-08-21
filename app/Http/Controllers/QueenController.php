<?php

namespace App\Http\Controllers;

use App\Models\Queen;
use Illuminate\Http\Request;

class QueenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexqueen()
    {
        
        $data = Queen::all();
        
        return view('Admin.Queen.index',compact('data'));  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createqueen()
    {
        return view('Admin.Queen.create');  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storequeen(Request $request)
    {
           $honey= new Queen();
        $honey ->name = $request->name;
        $honey ->price = $request->price;
        $honey ->country = $request->country;
        $honey ->type = $request->type;
        $honey ->qantylly = $request->qantylly;  
        $image = $request->image;
    
           if ($image) {
    
               $imagename = time() . '.' . $image->getClientOriginalExtension();
    
               $request->image->move('queenimage', $imagename);
    
               $honey->image = $imagename;
             
           }
    
           $honey->save();  
    
                return redirect()->route('queen')->with('message','Successfully');

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editqueen(string $id)
    {
        $data = Queen::find($id);

        return view('Admin.Queen.update',compact('data')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatequeen(Request $request, string $id)
    {

        $queen = Queen::find($id);
        $queen ->name = $request->name;
        $queen ->price = $request->price;
        $queen ->country = $request->country;
        $queen ->type = $request->type;
        $queen ->qantylly = $request->qantylly;  
        $image = $request->image;
        if ($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('queenimage', $imagename);

            $queen->image = $imagename;
        }

        $queen->save();

        return redirect()->route('queen')->with('message','Successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyqueen(string $id)
    {
        $queen = Queen::find($id);

        $queen->delete();
 
     return redirect()->back()->with('message','Successfully');
    }
    public function stutaccpet($id)
    {
        $status = Queen::find($id);
   
        $status -> queen_status = 'active';
   
        $status->save();
   
        return redirect()->back()->with('message','Successfully');
    }
   
   
       public function stutasremove($id)
       {
          Queen::find($id)->update(['queen_status' => "pending"]);;
   
        //    $status -> queen_status = 'pending';
   
        //    $status->save();
   
           return redirect()->back()->with('message','Successfully');
       }
}
