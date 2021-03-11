<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainOrder extends Model
{
    public function orders(){
        return $this->hasMany('App\Order');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
