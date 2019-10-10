<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.product')->with([
            'name_page' => __('shop.create.product'),
            'action' => 'product.store',
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
            'image' => 'required|image|max:2048'
        ]);

        $product->title = $request->get('title');
        $product->user_id = Auth::id();
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->save();

        $image = $request->file('image');

        $name = $product['id'] . '.' . $request['image']->getClientOriginalExtension();
        $image->move(public_path(config('app.image_dir')), $name);

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
        return view('admin.product')->with([
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
     * @return Factory|View
     */
    public function products()
    {
        $products = Product::all();

        return view('admin.products')->with(compact('products'));
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
