<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table="state";

    protected $filable=['state_name'];

    public function City()
    {
    	return $this->hasMany('App\City');
    	# code...
    }
}
