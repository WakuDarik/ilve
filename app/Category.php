<?php

namespace App;

use App\Traits\Translateble;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translateble;

    public function categoryProducts()
    {
        return $this->hasMany(Product::class);
    }
}
