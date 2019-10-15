<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddress;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        /** @var  User $user */
        $user = Auth::user();
        if (!$user) {
            return redirect()->home();
        }

        $address = $user->address()
            ->with([
                'products' => function ($query) {
                    /** @var Builder $query */
                    $query->oldest();
                }
            ])
            ->firstOrFail();

        return view('admin.profile')->with([
            'products' => $user->products,
            'user' => $user,
            'products_by_address' => $address->products
        ]);
    }

    /**
     * @param StoreAddress $request
     * @return RedirectResponse
     */
    public function update(StoreAddress $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $user->address()
            ->updateOrCreate(
                [],
                ['country' => $request->get('address')]
            );

        return redirect()->route('profile.index');
    }
}
