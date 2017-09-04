<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Image extends Model
{
    public function subproduct(){

    	return $this->belongsTo('App\subproduct','p_id');
    }
}
