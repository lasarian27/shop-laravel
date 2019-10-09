<?php

namespace App\Http\Controllers;

use App\Mail\CheckoutCart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::query()->whereIn('id', session()->get('cart', []))->get();

        return view('cart')->with(compact('products'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function checkout(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required'
        ]);

        $products = Product::query()->whereIn('id', session()->get('cart', []))->get();

        Mail::to(config('app.mail_manager'))->send(new CheckoutCart(
            $products,
            $request->get('name'),
            $request->get('email'),
            $request->get('comments')
        ));

        session()->forget('cart');

        return redirect()->home();
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Product $product)
    {
        $cart = array_diff(
            session()->get('cart', []),
            [$product->getKey()]
        );

        session()->put('cart', $cart);

        return redirect()->back();
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add(Product $product)
    {
        session()->push('cart', $product->getKey());

        return redirect()->back();
    }
}
