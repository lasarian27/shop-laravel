<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address_id', 'name', 'email', 'password', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'admin'
    ];


    /**
     * @return HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * @return HasOne
     */
    public function address()
    {
        return $this->hasOne(Address::class);
    }

    /**
     * @return BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class, (new UserRole)->getTable())->withTimestamps();
    }

    /**
     * @param string|array $role
     * @return bool
     */
    public function hasAnyRole($role)
    {
        $role = Arr::wrap($role);

        /** @var Collection $roles */
        $roles = $this->roles;

        return (bool)$roles->filter(function ($item) use ($role) {
            return in_array($item->key, $role);
        })->first();
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        return $this->hasAnyRole(Role::ROLE_ADMIN);
    }

    /**
     * @return bool
     */
    public function isModerator()
    {
        return $this->hasAnyRole(Role::ROLE_MODERATOR);
    }

    /**
     * @return bool
     */
    public function isUser()
    {
        return $this->hasAnyRole(Role::ROLE_USER);
    }
}
