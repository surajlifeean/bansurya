<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subproduct extends Model
{
            public function product(){

    	return $this->belongsTo('App\Product');
    }
    	   public function color(){

    	return $this->belongsTo('App\Color');
    }

    	public function images(){

    	return $this->hasMany('App\Product_Image','p_id');
    }
    	public function getsize(){

    	return $this->belongsTo('App\Size','size');
    }

    	public function getcolor(){

    	return $this->belongsTo('App\Color','color');
    }
        public function carts(){

        return $this->belongsToMany('App\cart','subproduct_cart');
    }


}
