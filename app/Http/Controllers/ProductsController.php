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
        return view('product.index')->with([
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
    public function store(Request $request, Product $product = null)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|max:2048'
        ]);


        $image = $request->file('image');
        $name = time() . '.' . $request['image']->getClientOriginalExtension();

        $destinationPath = public_path(env('IMAGE_URL'));

        if (!empty($product)) {
            unlink($destinationPath . '/' . $product->image);
            $image->move($destinationPath, $name);

            Product::where('id', $product->id)
                ->update([
                    'title' => $request->get('title'),
                    'description' => $request->get('description'),
                    'price' => $request->get('price'),
                    'image' => $name
                ]);

        } else {
            $image->move($destinationPath, $name);

            Product::create([
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'price' => $request->get('price'),
                'image' => $name
            ]);

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
        return view('product.index')->with([
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
     * Destroy the product and delete the image
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
