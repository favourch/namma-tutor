<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject_Fee extends Model
{
    protected $table="subject_fees";
    protected $fillable=['subject_id','based_on','fee'];

    public function Subject(){
        return $this->belongsTo('App\Subject');
    }
}
