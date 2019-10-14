<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddress;
use App\Models\Address;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        /** @var  User $user */
        $user = Auth::user();
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
     * @param Integer $id
     * @return RedirectResponse
     */
    public function update(StoreAddress $request, $id)
    {
        Auth::user()->address()->updateOrCreate(
            ['user_id' => $id],
            ['country' => $request->get('address')]
        );

        return redirect()->route('profile.index');
    }
}
