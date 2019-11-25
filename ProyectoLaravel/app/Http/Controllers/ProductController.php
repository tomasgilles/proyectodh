<?php

namespace App\Http\Controllers;

use App\Product;
use App\ImagesProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, ImagesProduct $imagesProduct, $brand)
    {
        $botines1 = Product::where('brand', $brand)->limit(3)->get();
        $botines2 = Product::where('brand', $brand)->offset(3)->limit(3)->get();
        $marca = $brand;

        $images = ImagesProduct::all();

        return view('botines', compact('botines1', 'botines2', 'marca'));
    }

    public function show2($brand, $id, Product $product, ImagesProduct $imagesProduct)
    {
      $botin = Product::find($id);
      $marca = $brand;
      return view('botin', compact('botin', 'marca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
