<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notebook extends Model
{
    //user owner of the notebook
    public function user(){
      return $this->belongsTo('App\User','user_id');
    }
}
