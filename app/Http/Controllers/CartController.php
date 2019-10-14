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
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function show()
    {
        return Product::query()->whereIn('id', session()->get('cart', []))->paginate();
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

        return response()->json(['status' => "The email was sent successfully"]);
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

        return response()->json(['status' => '200']);
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

        return response()->json(['status' => '200']);
    }
}
