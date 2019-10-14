<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProduct;
use App\Http\Requests\StoreProduct;
use App\Models\Product;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProductsController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Product::query()
                ->whereNotIn('id', session()->get('cart', []))
                ->paginate();
        }

        $products = Product::query()->orderBy('created_at', 'desc')->get();
        return view('admin.products')->with(compact('products'));
    }

    /**
     * @return Factory|View
     */
    public function create()
    {
        return view('admin.product')->with([
            'name_page' => __('shop.create.product'),
            'action' => 'products.store',
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

        return response()->json([
            'status' => 'The product was modified successfully',
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
            'action' => 'products.update',
            'id' => $product->id,
            'title' => $product->title,
            'description' => $product->description,
            'price' => $product->price,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function show()
    {
        /** @var  User $user */
        $user = Auth::user();
        if (!$user->isAdmin() && !$user->isModerator()) {
            return redirect()->home();
        }

        return Product::query()->orderBy('created_at', 'desc')->paginate();
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
        if ($request->ajax()) {
            return response()->json(['status' => '200']);
        }
        return back();
    }

}
