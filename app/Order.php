<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function item(){
        return $this->belongsTo('App\Item');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function main_order(){
        return $this->belongsTo('App\MainOrder');
    }


}
