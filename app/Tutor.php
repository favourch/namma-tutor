<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
class Tutor extends Model
{

    protected $table ="tutor";

    protected $fillable=['first_name','last_name','email','phone','qualification','experiance'];

    public function Subjects(){
    	return $this->hasMany('App\Subject');
    }

    public function Area(){
    	return $this->belongsTo('App\Area');
    }


}
