<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function Subproduct(){

    	return $this->hasMany('App\subproduct');
    }
}
