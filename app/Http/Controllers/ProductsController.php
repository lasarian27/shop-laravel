<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        return Product::query()
            ->whereNotIn('id', session()->get('cart', []))
            ->paginate();
    }

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

    public function update(StoreProduct $request, Product $product)
    {
        return $this->store($request, $product);
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
            'action' => 'products.add',
        ]);
    }

    /**
     * Edit a product
     * @param Product $product
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function edit(Product $product)
    {
        $this->authorize('view', $product);

        return view('admin.product')->with([
            'name_page' => __('shop.edit.product'),
            'action' => 'products.update',
            'id' => $product->id,
            'title' => $product->title,
            'description' => $product->description,
            'price' => $product->price,
        ]);
    }

    /**
     * @return Factory|View
     */
    public function show()
    {
        /** @var  User $user */
        $user = Auth::user();
        if (!$user->isAdmin() && !$user->isModerator()) {
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
