<?php

namespace App\Policies;

use App\Models\Address;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AddressPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the address.
     *
     * @param  \App\Models\User $user
     * @param  Address $address
     * @return mixed
     */
    public function update(User $user, Address $address)
    {
        return $address->user_id === $user->id;
    }

}
