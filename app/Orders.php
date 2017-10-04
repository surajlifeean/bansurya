<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
        public function subproduct(){

        return $this->belongsTo('App\subproduct','subproduct_id');
    }

}
