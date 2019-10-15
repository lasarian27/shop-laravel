<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProduct;
use App\Http\Requests\StoreProduct;
use App\Http\Requests\UpdateProduct;
use App\Models\Product;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(Request $request)
    {
        $query = Product::query()->with('user');

        if ($request->page === "home") {
            $query->whereNotIn('id', session()->get('cart', []));
        }

        if ($request->page === "cart") {
            $query->whereIn('id', session()->get('cart', []));
        }

        $query->orderBy('created_at', 'desc');
        if($request->wantsJson()) {
            return $query->paginate();
        }
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

        if ($request->image !== 'undefined') {
            $image = $request->file('image');

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
     * @param Product $product
     * @return Factory|View
     */
    public function edit(Product $product)
    {
        return view('admin.create')->with([
            'product' => $product
        ]);
    }

    /**
     * Destroy the product
     * @param Request $request
     * @param Product $product
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Request $request, Product $product)
    {
        $product->delete();

        if ($request->wantsJson()) {
            return response();
        }

        return back();
    }

}
