<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Product;
use App\User;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
       $this->middleware('auth');
       return back();
     }


    public function index()
    {
      $cart = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();

      return view('cart', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
      $product = Product::find($request->id);

      $item = New Cart;
      $item->name = $product->name;
      $item->size = $request->size;
      $item->price = $product->price;
      $item->quantity = $request->quantity;
      $item->user_id = Auth::user()->id;
      $item->main_image = $product->main_image;
      $item->status = 0; // producto no comprado
      // dd($product);
      // dd($item);

      $item->save();
      return redirect('cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $item = Cart::find($request->id);
        $item->delete();
        return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function cartClose(Cart $cart)
    {
      $items = Cart::where("user_id", Auth::user()->id)->where("status",0)->get();
      var_dump($items);
      foreach ($items as $item) {
        $item->status = 1;
        $item->save();
      }

      return redirect('home')->with('message', 'Has comprado el carrito');
    }

}
