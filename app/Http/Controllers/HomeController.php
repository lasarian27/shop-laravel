<?php

namespace App\Http\Controllers;

use App\Product;
use Log;

class HomeController extends Controller
{

    /**
     * Return 'home' with the products that are not in the cart
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::whereNotIn('id', session()->get('cart', []))->get();

        return view('home')->with(compact('products'));
    }
}
