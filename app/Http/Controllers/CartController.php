<?php

namespace App\Http\Controllers;

use App\Mail\CheckoutCart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::whereIn('id', session()->get('cart', []))->get();

        return view('cart')->with(compact('products'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'comments' => 'required|string'
        ]);

        $products = Product::whereIn('id', session()->get('cart', []))->get();

        $valueArray = [
            'products' => $products,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'comments' => $request->get('comments'),
        ];
        try {
            Mail::to('dumacristinel@gmail.com')->send(new CheckoutCart($valueArray));
            session()->forget('cart');
        } catch (\Exception $e) {
            echo 'Error - ' . $e;
        }

        return redirect()->home();
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Product $product)
    {
        $cart = session()->get('cart');
        $cart = array_filter($cart, function ($el) use ($product) {
            return $el !== $product->id;
        });
        session()->put('cart', $cart);

        return redirect()->back();
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Product $product)
    {

        $cart = session()->get('cart');

        // if cart is empty then push the first product
        if (!$cart) {
            session()->put('cart', [$product->id]);

            return redirect()->back();
        }

        $cart[] = $product->id;
        session()->put('cart', $cart);

        return redirect()->back();
    }
}
