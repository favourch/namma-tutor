<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Subject;
use App\City;
use Illuminate\Contracts\Pagination;

class Search extends Controller
{
    /**Basis Search Algorithm
     * @param $city
     * @param $q
     * @return Subjects
     */
    public function BasicSearch($city,$q)
    {
        $City=City::find($city)->Areas;

        /** Seperation Object with comma*/
        $AreasList = $City->implode('id',', ');

        /** @var Array Conversition $AreasList */
        $AreasList = (array) $AreasList;

        /** Fetching subject according to city*/
        $Subjects = Subject::join('tutor','subject.tutor_id','=','tutor.id')
            ->join('area','tutor.area_id','=','area.id')
            ->where('subject_name','LIKE',"%$q%")
            ->whereIn('tutor.area_id',$AreasList)
            ->paginate(10);
       return $Subjects;
    }

    /** Advance Search Algorithm
     * @param $AreaID
     * @param $Range
     * @return Subjects
     */
    public function AdvanceSearch (Request $request){

        $AreaID = $request['AreaID'];
        $MinPrice = $request['minPrice'];
        $MaxPrice = $request['maxPrice'];
        $Subjects = Subject::join('tutor','subject.tutor_id','=','tutor.id')
            ->join('area','tutor.area_id','=','area.id')
/*            ->join('city','area.city_id','=','city.id')*/
            ->join('subject_fees','subject.id','=','subject_fees.id')
/*            ->where('city.id','=','1')*/
            ->where('area.id','=',"$AreaID")
            ->whereBetween('subject_fees.fees',[$MinPrice,$MaxPrice])
            ->paginate(1);

        return $Subjects;

    }
}

