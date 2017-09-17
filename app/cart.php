<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
      public function subproducts()
    {
        return $this->belongsToMany('App\subproduct','subproduct_carts');
    }
}
