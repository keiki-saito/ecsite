<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category(){
        return $this->belongsTo('App\category');
    }

    public function reviews(){
        return $this->hasMany('App\Review');
    }

    public function scopeCategory($query,$category_id)
    {
        if(empty($category_id)){
            return;
        }

        return $query->where('category_id',$category_id);
    }

    public function scopeSearchName($query,$keyword)
    {
        if(empty($keyword)){
            return;
        }

        return $query->where('name','like','%'.$keyword.'%');
    }
}
