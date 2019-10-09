<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
       'title', 'description', 'price'
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
        unlink(public_path(config('app.image_dir')) . '/' . $this->id . config('app.image_extension'));
    }
}
