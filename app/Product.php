<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'code',
        'category_id',
        'style_id',
        'articul',
        'short_text',
        'features',
        'price',
        'plus',
        'iamge',
        'meta_t',
        'H1',
        'meta_k',
        'meta_d',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    public function images()
    {
        return $this->hasMany(Product_Image::class);
    }
}
