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
            $model->deleteImage();
        });
    }

    private function deleteImage()
    {
        unlink(public_path(env('IMAGE_URL')) . '/' . $this->get('image'));
    }
}
