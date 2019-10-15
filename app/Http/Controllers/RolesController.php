<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRole;
use App\Http\Requests\UpdateRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RolesController extends Controller
{
    /**
     * @return Factory|RedirectResponse|View
     */
    public function index()
    {
        /** @var  User $user */
        $user = Auth::user();
        if (!$user->isAdmin()) {
            return redirect()->home();
        }

        return view('admin.roles')->with([
            'roles' => Role::all(),
            'users' => User::all()
        ]);
    }

    /**
     * Store a new role
     *
     * @param StoreRole $request
     * @return Response
     */
    public function store(StoreRole $request)
    {
        (new Role())->fill([
            'name' => $request->get('role')
        ])->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRole $request
     * @param $id
     * @return Response
     */
    public function update(UpdateRole $request, $id)
    {
        /** @var  User $user */
        $user = User::query()
            ->where('id', $id)
            ->firstOrFail();

        $user->roles()->updateExistingPivot($user, ['role_id' => $request->get('role')]);

        return back();
    }

}
