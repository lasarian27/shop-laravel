<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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
     * @param StoreProduct $request
     * @param Product|null $product
     * @return RedirectResponse
     */
    public function store(StoreProduct $request, Product $product)
    {
        $product->fill([
            'title' => $request->get('title'),
            'user_id' => Auth::id(),
            'description' => $request->get('description'),
            'price' => $request->get('price')
        ])->save();

        $image = $request->file('image');

        $name = $product['id'] . '.' . $request['image']->getClientOriginalExtension();
        $image->move(public_path(config('app.image_dir')), $name);

        return back()->with([
            'message' => 'success',
            'name_page' => __('shop.create.product'),
            'action' => 'product.add',
        ]);
    }

    public function update(StoreProduct $request, Product $product)
    {
        return $this->store($request, $product);
    }

    /**
     * Edit a product
     * @param Product $product
     * @return Factory|View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Product $product)
    {
        $this->authorize('view', $product);

        return view('admin.product')->with([
            'name_page' => __('shop.edit.product'),
            'action' => 'product.update',
            'id' => $product->id,
            'title' => $product->title,
            'description' => $product->description,
            'price' => $product->price,
        ]);
    }

    /**
     * @return Factory|View
     */
    public function products()
    {
        if (!Gate::any(['isAdmin', 'isModerator'], Auth::user())) {
            return redirect()->home();
        }

        $products = Product::query()->orderBy('created_at', 'desc')->get();

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
        $this->authorize('delete', $product);

        $product->delete();
        return back();
    }

}
