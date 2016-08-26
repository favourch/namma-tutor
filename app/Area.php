<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //
    protected $table="area";

    protected $filable=['city_id','area_name'];

    public function City()
    {
        return $this->belongsTo('App\City');
    }

}
