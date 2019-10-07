<?php

namespace App\Http\Controllers;

use App\Product;
use Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::whereNotIn('id', session()->get('cart', []))->get();

        return view('home')->with(compact('products'));
    }
}
