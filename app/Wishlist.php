<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
	 public function subproducts()
    {
        return $this->belongsToMany('App\subproduct','subproduct_wishlists');
    }
    
}
