<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartpage()
    {
        
       if (Auth::guard('customer')->id()){

        return view("beehoney.cart");
        # code...
        
    }else {
        return redirect()->route('logincustomer');
    }
}


public function addMovieToCart(Request $request)
{
    $movieId = $request->input('product_id');
    $quantity = $request->input('quantity', 1);
    $cartItemId = $request->input('cart_item_id');

    $movie = Cart::find($movieId);

    if (!$movie) {
        return response()->json(['error' => 'Movie not found'], 404);
    }

    $cart = session()->get('cart', []);

    if (isset($cart[$movieId])) {
        // Update quantity if product is already in the cart
        $cart[$movieId]['quantity'] += $quantity;
    } else {
        // Add new item to the cart
        $cart[$movieId] = [
            'id' => $movie->id,
            'name' => $movie->name,
            'price' => $movie->price,
            'quantity' => $quantity,
            "poster" => $movie->poster
        ];
    }

    session()->put('cart', $cart);

    // Calculate the total quantity
    $totalQuantity = 0;
    foreach ($cart as $item) {
        $totalQuantity += $item['quantity'];
    }
    return response()->json(['message' => 'Cart updated', 'cartCount' => $totalQuantity], 200);
}


public function deleteItem(Request $request)
{
    if($request->id) {
        $cart = session()->get('cart');
        if(isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        session()->flash('success', 'Movie successfully deleted.');
    }
}



public function indexorder()
{
    $data = Cart::all();
    return view('Admin.Orders.index',compact('data'));  
}

public function stutaccpet($id)
{
    $status = Cart::find($id);

    $status -> stauts = 'active';

    $status->save();

    return redirect()->back()->with('message','Successfully');
}
}
