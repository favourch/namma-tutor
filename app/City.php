<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table="city";

    protected $filable=['state_id','city_name'];

    public function Areas()
    {
        return $this->hasMany('App\Area');
    }

    public function State()
    {
    	# code...
    	return $this->belongsTo('App\State');
    }

}
