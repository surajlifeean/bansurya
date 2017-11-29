<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Returnorder extends Model
{
    //

     protected $table = 'returns';
     
        public function order(){

        return $this->belongsTo('App\Orders','o_id');
    }

}
