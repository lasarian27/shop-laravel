<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the product.
     *
     * @param  \App\Models\User $user
     * @param Product $product
     * @return mixed
     */
    public function view(User $user, Product $product)
    {
        return true;
    }

    /**
     * Determine whether the user can update or create the product.
     *
     * @param  \App\Models\User $user
     * @param  Product $product
     * @return mixed
     */
    public function update(User $user, Product $product)
    {
        return $user->isAdmin() && $product->user_id === $user->getKey();
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
        return $this->update($user, $product);
    }

}
