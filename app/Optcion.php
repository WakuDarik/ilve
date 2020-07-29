<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Optcion extends Model
{

    protected $fillable = [
        'products_id',
        'price',
        'option',
    ];

    public function productOptions()
    {
        return $this->belongsTo(Product::class);
    }
}
