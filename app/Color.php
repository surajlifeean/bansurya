<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
     public function subproducts(){

    	return $this->hasMany('App\subproduct');
    }
    
}
