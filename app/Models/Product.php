<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
       'user_id' ,'title', 'description', 'price'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

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
