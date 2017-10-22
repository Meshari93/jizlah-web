<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals';

    public function sicks()
    {
      return $this->belongsToMany('App\Sick');
    }

}
