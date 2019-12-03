<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $camiseta1 = Product::where('name', 'like', 'juventus')->get()->first();
        $camiseta2 = Product::where('name', 'like', 'barcelona')->get()->first();
        $camiseta3 = Product::where('name', 'like', 'ajax')->get()->first();
        $camiseta4 = Product::where('name', 'like', 'napoli')->get()->first();
        $camiseta5 = Product::where('name', 'like', 'real madrid')->get()->first();
        $camiseta6 = Product::where('name', 'like', 'juventus')->get()->first();

        $kit = Product::where('brand', 'kit')->get()->first();

        return view('home', compact('camiseta1', 'camiseta2', 'camiseta3', 'camiseta4', 'camiseta5', 'camiseta6', 'kit'));
    }
}
