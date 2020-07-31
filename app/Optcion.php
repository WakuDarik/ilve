<?php

namespace App;

use App\Services\CurrencyConvertion;
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

    public function getPriceAttribute($value)
    {
        return round(CurrencyConvertion::convert($value), 2);
    }
}
