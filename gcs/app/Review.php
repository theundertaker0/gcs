<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Review
 *
 * @mixin \Eloquent
 */
class Review extends Model
{
    public function enterprise(){
        return $this->belongsTo(Enterprise::class)->select('id','name');
    }

    public function user(){
        return $this->belongsTo(User::class)->select('id','name');
    }
}
