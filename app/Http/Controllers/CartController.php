<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::whereIn('id', session()->get('cart', []))->get();

        return view('cart')->with(compact('products'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'comments' => 'required|numeric'
        ]);

        return back();
    }

    public function delete(Product $product)
    {
        $cart = session()->get('cart');
        $cart = array_filter($cart, function($el) use ($product){
           return $el !== $product->id;
        });
        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function add(Product $product)
    {

        $cart = session()->get('cart');

        // if cart is empty then push the first product
        if (!$cart) {
            session()->put('cart', [$product->id]);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[] = $product->id;
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
