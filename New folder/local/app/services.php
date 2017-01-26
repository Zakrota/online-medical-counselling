<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class services extends Model
{
      protected $table="services" ; 

      public function Comment()
{
    return $this->belongsTo('App\comment', 'service_id');
}

}
