<?php

namespace App;

use App\Traits\Translateble;
use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    use Translateble;

    public function styleProducts()
    {
        return $this->hasMany(Product::class);
    }

    public function styleProductsByCategory($id)
    {
        return $this->hasMany(Product::class)->where('category_id', $id)->get();
    }
}
