<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Brand
 *
 * @mixin \Eloquent
 */
class Brand extends Model
{
    public function products(){
        return $this->hasMany(Product::class);
    }
}
