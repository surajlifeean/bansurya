<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
        public function subproduct(){

        return $this->belongsTo('App\subproduct','subproduct_id');
    }

        public function replacement(){

        return $this->hasOne('App\Replacement','o_id');
    }


        public function returnorder(){

        return $this->hasOne('App\Returnorder','o_id');
    }

    

}
