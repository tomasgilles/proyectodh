<?php

namespace App\Http\Controllers;

use App\ImagesProduct;
use Illuminate\Http\Request;

class ImagesProductController extends Controller
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
      $this->validate($request,
        [
          'image1' =>['file', 'image'],
          'image2' =>['file', 'image'],
          'image3' =>['file', 'image'],
        ],
        [
          'required' => 'Este campo es obligatorio',
          'image' => 'Formato de imágen inválido'
        ]
      );

      $newImage1 = new ImagesProduct;
      $newImage2 = new ImagesProduct;
      $newImage3 = new ImagesProduct;

      $ruta1 = $request->file('image1')->store('public/products');
      $nombreArchivo1 = basename($ruta1);
      $newImage1->image = $nombreArchivo1;
      $newImage1->product_id = $request->product_id;

      $ruta2 = $request->file('image2')->store('public/products');
      $nombreArchivo2 = basename($ruta2);
      $newImage2->image = $nombreArchivo2;
      $newImage2->product_id = $request->product_id;


      $ruta3 = $request->file('image3')->store('public/products');
      $nombreArchivo3 = basename($ruta3);
      $newImage3->image = $nombreArchivo3;
      $newImage3->product_id = $request->product_id;


      $newImage1->save();
      $newImage2->save();
      $newImage3->save();

      return redirect ('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImagesProduct  $imagesProduct
     * @return \Illuminate\Http\Response
     */
    public function show(ImagesProduct $imagesProduct)
    {
      // $images = ImagesProduct::all();
      // return view('botines', compact('images'));
    }

    public function show2($product_id)
    {
      // $product = ImagesProduct::find($product_id);
      //
      // return view('botin', compact('product'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImagesProduct  $imagesProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(ImagesProduct $imagesProduct)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImagesProduct  $imagesProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImagesProduct $imagesProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImagesProduct  $imagesProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImagesProduct $imagesProduct)
    {
        //
    }
}
