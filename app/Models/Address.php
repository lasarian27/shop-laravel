<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'user_id', 'country'
    ];

    /**
     * @return HasManyThrough
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, User::class);
    }
}
