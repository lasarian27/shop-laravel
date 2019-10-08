<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
       'title', 'description', 'price', 'image'
    ];

    public static function boot()
    {
        parent::boot();

        static::deleted(function($model){
            /** @var static $model */
//            $model->deleteImage();
        });
    }
}
