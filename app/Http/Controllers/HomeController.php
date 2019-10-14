<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Return 'home' with the products that are not in the cart
     *
     * @return Factory|View
     */
    public function index()
    {
        $products = Product::query()
            ->whereNotIn('id', session()->get('cart', []))
            ->get();

        return view('home')->with(compact('products'));
    }
}
