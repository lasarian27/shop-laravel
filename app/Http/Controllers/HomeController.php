<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddress;
use App\Models\Address;
use App\Models\Product;
use App\Models\User;

class HomeController extends Controller
{

    /**
     * Return 'home' with the products that are not in the cart
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::query()
            ->whereNotIn('id', session()->get('cart', []))
            ->get();

        return view('home')->with(compact('products'));
    }

    /**
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function profile($name)
    {
        $user = User::query()
            ->where('name', $name)
            ->with('address')
            ->firstOrFail();

        $this->authorize('view', $user);

        $address = Address::query()->where('id', $user->address->id)->with(['products' => function ($query) {
            $query->orderBy('created_at', 'asc');
        }])->firstOrFail();

        return view('admin.profile')->with([
            'products' => $user->products,
            'user' => $user,
            'products_by_address' => $address->products
        ]);
    }

    /**
     * @param StoreAddress $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function address(StoreAddress $request, User $user)
    {
        $this->authorize('update', $user->address());

        $user->address()->updateOrCreate(
            ['user_id' => $user->id],
            ['country' => $request->get('address')]
        );

        return redirect()->route('role.index');
    }

}
