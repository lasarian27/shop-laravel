<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRole;
use App\Http\Requests\VisitRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Response;

class RolesController extends Controller
{
    /**
     * @param VisitRole $request
     * @return array
     */
    public function index(VisitRole $request)
    {
         if ($request->wantsJson()) {
            $obj = ['users' => User::query()->with('roles')->get()];

            if ($request->get('param') === 'all') {
                $obj['roles'] = Role::all();
            }

            return $obj;
        }

        return view('admin.roles');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRole $request
     * @param User $user
     * @return Response
     */
    public function update(UpdateRole $request, User $user)
    {
        $user->roles()->sync([$request->get('role')]);

        return response()->json();
    }

}
