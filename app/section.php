<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
  //sections of notebook
  public function chapters(){
    return $this->hasMany('App\chapter');
  }
}
