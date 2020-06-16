<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function categoryProducts()
    {
        return $this->hasMany(Product::class);
    }
}
