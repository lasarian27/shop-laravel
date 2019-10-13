<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'user_id', 'title', 'description', 'price'
    ];

    public static function boot()
    {
        parent::boot();

        static::deleted(function ($model) {
            /** @var static $model */
            $model->deleteImage();
        });
    }

    private function deleteImage()
    {
        unlink(public_path(config('app.image_dir')) . '/' . $this->id . config('app.image_extension'));
    }

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
