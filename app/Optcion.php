<?php

namespace App;

use App\Traits\Translateble;
use App\Services\CurrencyConvertion;
use Illuminate\Database\Eloquent\Model;

class Optcion extends Model
{
    use Translateble;

    protected $fillable = [
        'products_id',
        'price',
        'option',
    ];

    public function productOptions()
    {
        return $this->belongsTo(Product::class);
    }

    public function getPriceConvertAttribute()
    {
        return round(CurrencyConvertion::convert($this->price), 2);
    }
}
