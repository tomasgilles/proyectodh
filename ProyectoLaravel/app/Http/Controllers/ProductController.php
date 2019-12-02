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
      if (Auth::user()->rol != 100) {
        return back();
      }

      return view('formulario1');
    }

    public function agregarFotos()
    {
      if (Auth::user()->rol != 100) {
        return back();
      }

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
    public function show($tipo, $brand)
    {
        $botines1 = Product::where('brand', $brand)->where('product_type', $tipo)->limit(3)->get();
        $botines2 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(3)->limit(3)->get();
        $botines3 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(6)->limit(3)->get();
        $marca = $brand;
        $tipoProducto = $tipo;

          if($brand == 'nike'){
            $fotoG = "/img/nike-mercurial1.jpg";
          }
          if ($brand == 'adidas'){
            $fotoG = "/img/adidas-nemeziz1.jpg";
          }
          if ($brand == 'puma'){
            $fotoG = "/img/puma-carrousel.jpg";
          }
          if ($brand == 'remeras'){
            $fotoG = "/img/foto-fondo2.jpg";
          }
          if ($brand == 'camperas'){
            $fotoG = "/img/foto-fondo2.jpg";
          }
          if ($brand == 'medias'){
            $fotoG = "/img/foto-fondo2.jpg";
          }
          if ($brand == 'shorts'){
            $fotoG = "/img/foto-fondo2.jpg";
          }
          if ($brand == 'pelotas') {
            $fotoG = "/img/bannerweb1.jpg";
          }
          if ($brand == 'otros') {
            $fotoG = "/img/bannerweb1.jpg";
          }

        $images = ImagesProduct::all();

        return view('botines', compact('botines1', 'botines2', 'botines3', 'marca', 'tipoProducto', 'fotoG'));
    }

    public function filter($tipo, $brand, Request $request)
    {

        if ($request->orderby == 'p_men_a_may') {
          $botines1 = Product::where('brand', $brand)->where('product_type', $tipo)->limit(3)->orderBy('price')->get();
          $botines2 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(3)->limit(3)->orderBy('price')->get();
          $botines3 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(6)->limit(3)->orderBy('price')->get();
        }

        if ($request->orderby == 'p_may_a_men') {
          $botines1 = Product::where('brand', $brand)->where('product_type', $tipo)->limit(3)->orderBy('price', 'DESC')->get();
          $botines2 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(3)->limit(3)->orderBy('price', 'DESC')->get();
          $botines3 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(6)->limit(3)->orderBy('price', 'DESC')->get();
        }

        if ($request->orderby == 'nuevos') {
          $botines1 = Product::where('brand', $brand)->where('product_type', $tipo)->limit(3)->orderBy('created_at')->get();
          $botines2 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(3)->limit(3)->orderBy('created_at')->get();
          $botines3 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(6)->limit(3)->orderBy('created_at')->get();
        }

        if ($request->orderby == 'viejos') {
          $botines1 = Product::where('brand', $brand)->where('product_type', $tipo)->limit(3)->orderBy('created_at', 'DESC')->get();
          $botines2 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(3)->limit(3)->orderBy('created_at', 'DESC')->get();
          $botines3 = Product::where('brand', $brand)->where('product_type', $tipo)->offset(6)->limit(3)->orderBy('created_at', 'DESC')->get();
        }

        $marca = $brand;
        $tipoProducto = $tipo;

        if($brand == 'nike'){
          $fotoG = "/img/nike-mercurial1.jpg";
        }
        if ($brand == 'adidas'){
          $fotoG = "/img/adidas-nemeziz1.jpg";
        }
        if ($brand == 'puma'){
          $fotoG = "/img/puma-carrousel.jpg";
        }
        if ($brand == 'remeras'){
          $fotoG = "/img/foto-fondo2.jpg";
        }
        if ($brand == 'camperas'){
          $fotoG = "/img/foto-fondo2.jpg";
        }
        if ($brand == 'medias'){
          $fotoG = "/img/foto-fondo2.jpg";
        }
        if ($brand == 'shorts'){
          $fotoG = "/img/foto-fondo2.jpg";
        }
        if ($brand == 'pelotas') {
          $fotoG = "/img/bannerweb1.jpg";
        }
        if ($brand == 'otros') {
          $fotoG = "/img/bannerweb1.jpg";
        }

        $images = ImagesProduct::all();

        return view('botines', compact('botines1', 'botines2', 'botines3', 'marca', 'tipoProducto', 'fotoG'));
    }

    public function show2($tipo, $brand, $id, Product $product, ImagesProduct $imagesProduct)
    {
      $botin = Product::find($id);

      $botinRand11 = Product::where('deleted_at', NULL)->get();

      $botinRand1 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand2 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand3 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand4 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand5 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand6 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $marca = $brand;
      $tipoProducto = $tipo;

      return view('botin', compact('botin', 'marca', 'tipoProducto', 'botinRand1', 'botinRand2', 'botinRand3', 'botinRand4', 'botinRand5', 'botinRand6'));
    }

    public function show3( Product $product, ImagesProduct $imagesProduct){

      $botin = Product::where('brand', 'kit')->get();

      $botinRand11 = Product::where('deleted_at', NULL)->get();

      $botinRand1 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand2 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand3 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand4 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand5 = $botinRand11[rand(0, (count($botinRand11) - 1))];
      $botinRand6 = $botinRand11[rand(0, (count($botinRand11) - 1))];

      return view('promo-kit', compact('botinRand1', 'botinRand2', 'botinRand3', 'botinRand4', 'botinRand5', 'botinRand6'));
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
    public function destroy(Product $product, Request $request)
    {
        $nombreProducto = '%' . $request->name . '%';
        $item = Product::where('name', 'like', $nombreProducto)->get();
        // dd($item);
        if ($item) {
          $item[0]->delete();
          $id = $item[0]->id;
          $images = ImagesProduct::where('product_id', '=', $id)->get();
        }
        foreach ($images as $image) {
          $image->delete();
        }
        return redirect ('/home');
    }

    public function borrarProducto()
    {
      if (Auth::user()->rol != 100) {
        return back();
      }

      return view('eliminarpelicula');
    }

    public function busqueda(Request $request){
    $products = Product::where('name', 'like', '%' . $request->busqueda . '%')->get();

    return view("busqueda", compact('products'));
    }

}
