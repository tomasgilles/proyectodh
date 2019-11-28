<?php

namespace App\Http\Controllers;

use App\Product;
use App\ImagesProduct;
use Illuminate\Http\Request;
use Auth;

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

    public function agregarProducto()
    {
      return view('formulario1');
    }

    public function agregarFotos()
    {
      $ultimoProducto = Product::all()->last();
      return view('formulario2', compact('ultimoProducto'));
    }

    public function store(Request $request)
    {
        $this->validate($request,
          [
            'name' => ['max:200'],
            'main_image' =>['file', 'image'],
          ],
          [
            'required' => 'Este campo es obligatorio',
            'image' => 'Formato de imágen inválido'
          ]
        );

        $newProduct = new Product;

        $newProduct->user_id = Auth::user()->id;
        $newProduct->name = $request->name;
        $newProduct->description = $request->description;
        $newProduct->size = $request->size;
        $newProduct->price = $request->price;
        $newProduct->stock = $request->stock;
        $newProduct->brand = $request->brand;
        $newProduct->product_type = $request->product_type;

        $ruta = $request->file('main_image')->store('public/products');
        $nombreArchivo = basename($ruta);
        $newProduct->main_image = $nombreArchivo;

        $newProduct->save();

        return redirect ('/formulario2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product, ImagesProduct $imagesProduct, $tipo, $brand)
    {
        $botines1 = Product::where('brand', $brand)->where('product_type', $tipo)->limit(3)->get();
        $botines2 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(3)->limit(3)->get();
        $botines3 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(6)->limit(3)->get();
        $marca = $brand;
        $tipoProducto = $tipo;

        $images = ImagesProduct::all();

        return view('botines', compact('botines1', 'botines2', 'botines3', 'marca', 'tipoProducto'));
    }

    public function show2($tipo, $brand, $id, Product $product, ImagesProduct $imagesProduct)
    {
      $botin = Product::find($id);


      $botinRand1 = Product::where('id', rand(1, 8))->where('product_type', $tipo)->get()->first();
      $botinRand2 = Product::where('id', rand(1, 8))->where('product_type', $tipo)->get()->first();
      $botinRand3 = Product::where('id', rand(1, 8))->where('product_type', $tipo)->get()->first();
      $botinRand4 = Product::where('id', rand(1, 8))->where('product_type', $tipo)->get()->first();
      $botinRand5 = Product::where('id', rand(1, 8))->where('product_type', $tipo)->get()->first();
      $botinRand6 = Product::where('id', rand(1, 8))->where('product_type', $tipo)->get()->first();
      $marca = $brand;
      $tipoProducto = $tipo;

      return view('botin', compact('botin', 'marca', 'tipoProducto', 'botinRand1', 'botinRand2', 'botinRand3', 'botinRand4', 'botinRand5', 'botinRand6'));
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
    public function busqueda(Request $request){
    $products = Product::where('name', 'like', '%' . $request->busqueda . '%')->get();

    return view("busqueda", compact('products'));
    }

}
