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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('cart');
    }

    /**
     * Checkout
     *
     * @param SubmitCart $request
     * @return Response
     */
    public function checkout(SubmitCart $request)
    {
        $products = Product::query()->whereIn('id', session()->get('cart', []))->get();

        Mail::to(config('app.mail_manager'))->send(new CheckoutCart(
            $products,
            $request->get('name'),
            $request->get('email'),
            $request->get('comments')
        ));

        session()->forget('cart');

        return response()->json(['status' => __('shop.mail.sent')]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Product $product
     * @return Response
     */
    public function add(Product $product)
    {
        session()->push('cart', $product->getKey());

        return response()->json();
    }

    /**
     * Remove a product from the cart
     *
     * @param Product $product
     * @return Response
     */
    public function remove(Product $product)
    {

        session()->put('cart', array_diff(
            session()->get('cart', []),
            [$product->getKey()]
        ));

        return response()->json();
    }
}
