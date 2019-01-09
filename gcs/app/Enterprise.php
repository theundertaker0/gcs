<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Enterprise
 *
 * @mixin \Eloquent
 */
class Enterprise extends Model {

    function reviews() {
        return $this->hasMany(Review::class);
    }

    function products() {
        return $this->hasMany(Product::class);
    }

}