<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories(){

    	return $this->belongsTo('App\Category','category_id');
    }

        public function subcategory(){

    	return $this->belongsTo('App\Subcategory');
    }


    public function subproducts(){

    	return $this->hasMany('App\subproduct');
    }
    
}
