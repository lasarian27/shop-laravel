<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Product;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

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
     */
    public function profile($name)
    {
        $user = User::query()
            ->where('name', $name)
            ->firstOrFail();

        $products = $user->products;

        return view('profile')->with([
            'products' => $products,
            'user' => $user,
        ]);
    }

    /**
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function address(Request $request, User $user)
    {
        $request->validate([
            'address' => 'required',
        ]);

        Address::updateOrCreate(
            ['user_id' => $user->id],
            ['country' => $request->get('address')]
        );

        return redirect()->back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function roles()
    {
        $roles = Role::all();
        $users = User::all();

        return view('roles')->with([
            'roles' => $roles,
            'users' => $users
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveNewRole(Request $request)
    {
        $request->validate([
            'role' => 'required',
        ]);

        $role = new Role();
        $role->name = $request->get('role');
        $role->save();

        return back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function role(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'user' => 'required'
        ]);

        $user =  User::query()
            ->where('id', $request->get('user'))
            ->firstOrFail();

        $user->roles()->attach($request->get('role'));

        return back();
    }

}
