<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestroyProduct;
use App\Http\Requests\EditProduct;
use App\Http\Requests\StoreProduct;
use App\Models\Product;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('admin.products');
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.create')->with([
            'product' => new Product()
        ]);
    }

    /**
     * @param StoreProduct $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function update(StoreProduct $request, Product $product)
    {
        return $this->store($request, $product);
    }

    /**
     * Create or update a product
     * @param StoreProduct $request
     * @param Product $product
     * @return RedirectResponse
     */
    public function store(StoreProduct $request, Product $product)
    {
        $product->fill($request->all())->save();

        if ($image = $request->file('image')) {
            $name = $product->getKey() . '.' . $request['image']->getClientOriginalExtension();
            $image->move(public_path(config('app.image_dir')), $name);
        }

        if ($request->wantsJson()) {
            return response()->json([
                'status' => __('shop.product.edited'),
                'product' => $product,
            ]);
        }

        return view('admin.create')->with([
            'product' => new Product()
        ]);
    }

    /**
     * Edit a product
     * @param EditProduct $request
     * @param Product $product
     * @return Factory|View
     */
    public function edit(EditProduct $request, Product $product)
    {
        return view('admin.create')->with([
            'product' => $product
        ]);
    }

    /**
     * Destroy the product
     * @param DestroyProduct $request
     * @param Product $product
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(DestroyProduct $request, Product $product)
    {
        $product->delete();

        if ($request->wantsJson()) {
            return response()->json();
        }

        return back();
    }

}
