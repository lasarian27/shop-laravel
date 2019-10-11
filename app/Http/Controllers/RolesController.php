<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRole;
use App\Http\Requests\UpdateRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        /** @var  User $user */
        $user = Auth::user();
        if (!$user->isAdmin()) {
            return redirect()->home();
        }

        $roles = Role::all();
        $users = User::all();

        return view('admin.roles')->with([
            'roles' => $roles,
            'users' => $users
        ]);
    }

    /**
     * Store a new role
     *
     * @param StoreRole $request
     * @return \Illuminate\Http\Response
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
     * @return \Illuminate\Http\Response
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
