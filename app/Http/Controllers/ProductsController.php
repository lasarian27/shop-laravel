<?php

namespace App\Http\Controllers;

use App\Product;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @return Factory|View
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
     * @return RedirectResponse
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
        $name = $product->getKey() . '.' . $request['image']->getClientOriginalExtension();

        $destinationPath = public_path(env('IMAGE_URL'));
        $image->move($destinationPath, $name);

/*        $product->fill([
            $request->get('title'),
            $request->get('description'),
            $request->get('price'),
            $product->getKey() . '.' . $request['image']->getClientOriginalExtension()
        ]);
        $product->save();*/

        $product->title = $request->get('title');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->image = $name;
        $product->save();


        return back()->with([
            'message' => 'success',
            'name_page' => __('shop.create.product'),
            'action' => 'product.add',
        ]);
    }


    /**
     * Edit a product
     * @param Product $product
     * @return Factory|View
     */
    public function edit(Product $product)
    {
        return view('product')->with([
            'name_page' => __('shop.edit.product'),
            'action' => 'product.store',
            'id' => $product->get('id'),
            'title' => $product->get('title'),
            'description' => $product->get('description'),
            'price' => $product->get('price'),
        ]);
    }

    /**
     * Return all products from db
     * @return Factory|View
     */
    public function products()
    {
        $products = Product::all();

        return view('products')->with(compact('products'));
    }

    /**
     * Destroy the product
     * @param Product $product
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
    }

}
