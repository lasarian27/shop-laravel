<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any products.
     *
     * @param  \App\Models\User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->admin;
    }

    /**
     * Determine whether the user can view the product.
     *
     * @param  \App\Models\User $user
     * @param Product $product
     * @return mixed
     */
    public function view(User $user, Product $product)
    {
        return $product->user_id === $user->id && $user->admin
            ? Response::allow()
            : Response::deny('You do not own this product.');
    }

    /**
     * Determine whether the user can create products.
     *
     * @param  \App\Models\User $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the product.
     *
     * @param  \App\Models\User $user
     * @param  Product $product
     * @return mixed
     */
    public function update(User $user, Product $product)
    {
        return $product->user_id === $user->id && $user->admin
            ? Response::allow()
            : Response::deny('You do not own this product.');
    }

    /**
     * Determine whether the user can delete the product.
     *
     * @param  \App\Models\User $user
     * @param  Product $product
     * @return mixed
     */
    public function delete(User $user, Product $product)
    {
        return $product->user_id === $user->id && $user->admin
            ? Response::allow()
            : Response::deny('You do not own this product.');
    }

    /**
     * Determine whether the user can restore the product.
     *
     * @param  \App\Models\User $user
     * @param  Product $product
     * @return mixed
     */
    public function restore(User $user, Product $product)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the product.
     *
     * @param  \App\Models\User $user
     * @param  Product $product
     * @return mixed
     */
    public function forceDelete(User $user, Product $product)
    {
        //
    }
}
