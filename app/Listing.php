<?php

namespace App;

use App\Card;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public function cards()
    {
        return $this->hasMany('App\Card');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
