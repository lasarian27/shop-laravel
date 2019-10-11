<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Product;
use App\Models\Address;
use App\Models\Role;
use App\Policies\ProductPolicy;
use App\Policies\UserPolicy;
use App\Policies\AddressPolicy;
use App\Policies\RolePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Product::class => ProductPolicy::class,
        User::class => UserPolicy::class,
        Address::class => AddressPolicy::class,
        Role::class => RolePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            /** @var User $user */
            if ($user->isAdmin()) {
                return true;
            }
        });
    }
}
