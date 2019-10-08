<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * return the "Create product" view
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('product')->with([
            'name_page' => __('shop.create.product'),
            'action' => 'product.create',
        ]);
    }

    /**
     * Create or update a product
     * @param Request $request
     * @param Product|null $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|max:2048'
        ]);

        $image = $request->file('image');
        $name = time() . '.' . $request['image']->getClientOriginalExtension();

        $destinationPath = public_path(env('IMAGE_URL'));

        if (!empty($product)) {
           // unlink($destinationPath . '/' . $product->image);
            $image->move($destinationPath, $name);

            $product->fill([
                $request->get('title'),
                $request->get('description'),
                $request->get('price'),
                $name
                ]);
            $product->save();

        } else {
            $image->move($destinationPath, $name);

            $product->title = $request->get('title');
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            $product->image = $name;
            $product->save();

        }

        return back()->with([
            'message' => 'success',
            'name_page' => __('shop.create.product'),
            'action' => 'product.add',
        ]);
    }


    /**
     * Edit a product
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('product')->with([
            'name_page' => __('shop.edit.product'),
            'action' => 'product.store',
            'id' => $product->id,
            'title' => $product->title,
            'description' => $product->description,
            'price' => $product->price,
        ]);
    }

    /**
     * Return all products from db
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function products()
    {
        $products = Product::all();

        return view('products')->with(compact('products'));
    }

    /**
     * Destroy the product
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();

        unlink(public_path(env('IMAGE_URL')) . '/' . $product->image);

        return back();
    }

}
