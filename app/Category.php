<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function items(){
        return $this->hasMany('App\item');
    }


    public function getCategories()
    {
        $categories = Category::orderBy('id','asc')->pluck('category_name','id');

        return $categories;
    }
}
