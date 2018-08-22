<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @mixin \Eloquent
 */
class Product extends Model
{
    function user(){
        return $this->belongsTo(User::class);
    }

    function bill(){
        return $this->belongsTo(Bill::class);
    }

    function brand(){
        return $this->belongsTo(Brand::class);
    }

    function enterprise(){
        return $this->belongsTo(Enterprise::class);
    }
}
