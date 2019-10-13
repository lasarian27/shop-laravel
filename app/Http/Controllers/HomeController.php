<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddress;
use App\Models\Address;
use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{

    /**
     * Return 'home' with the products that are not in the cart
     *
     * @return Factory|View
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
     * @return Factory|View
     * @throws AuthorizationException
     */
    public function profile($name)
    {
        /** @var  User $user */
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
     * @return RedirectResponse
     * @throws AuthorizationException
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
