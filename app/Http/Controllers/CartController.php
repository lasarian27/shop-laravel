<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitCart;
use App\Mail\CheckoutCart;
use App\Models\Product;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    /**
     * Show the cart
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::query()->whereIn('id', session()->get('cart', []))->get();
        return view('cart')->with(compact('products'));
    }

    /**
     * Checkout
     *
     * @param SubmitCart $request
     * @return Response
     */
    public function store(SubmitCart $request)
    {
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
     * Update the specified resource in storage.
     *
     * @param Integer $id
     * @return Response
     */
    public function update($id)
    {
        session()->push('cart', $id);

        return redirect()->back();
    }

    /**
     * Remove a product from the cart
     *
     * @param Integer $id
     * @return Response
     */
    public function destroy($id)
    {
        $cart = array_diff(
            session()->get('cart', []),
            [$id]
        );

        session()->put('cart', $cart);

        return redirect()->back();
    }
}
