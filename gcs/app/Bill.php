<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Bill
 *
 * @mixin \Eloquent
 */
class Bill extends Model
{
    public  function products(){
        return $this->hasMany(Product::class);
    }

}
