<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    public function styleProducts()
    {
        return $this->hasMany(Product::class);
    }

    public function styleProductsByCategory($id)
    {
        return $this->hasMany(Product::class)->where('category_id', $id)->get();
    }
}
