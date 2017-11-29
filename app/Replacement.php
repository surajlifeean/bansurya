<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replacement extends Model
{
    
        public function order(){

        return $this->belongsTo('App\Orders','o_id');
    }

}
