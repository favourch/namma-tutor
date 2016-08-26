<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $table="subject";
    protected $fillable=['tutor_id','subject_name','short_name','description'];

    public function Tutor(){
    	return $this->belongsTo('App\Tutor');
    }

    public function Charge(){
        return $this->hasOne('App\Subject_Fee');
    }
}
