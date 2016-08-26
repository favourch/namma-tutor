<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Pagination;
use App\Http\Requests;
use App\Tutor;
use App\Subject;

class Profile extends Controller
{
    /**
     * Finding teacher with Location
     * @param $tutor_id
     * @return \Illuminate\Database\Eloquent\Collection|static[] $TutorData[]
     */
    public function Tutor($tutor_id)
    {
        /*Fetching Tutor Information From Database*/
        $TutorData = Tutor::find($tutor_id);
        $TutorData->Area->City->State;  //Grabing Location of Tutor.

        //Data Conversion to UNIX Format
        $Date = $TutorData->created_at;
        $Date = strtotime($Date);
        $Date = array('unix_date'=>$Date);

        //Collecting Data in Collection And Pusing Unix Date to Result Array.
        $Collection= collect($TutorData);
        $Result=$Collection->merge($Date);

        return $Result;
    }

    /**
     *Get subject teach by Teacher
     * @param $tutor_id
     * @return Subject
     */
    public function TeachesSubject($tutor_id)
    {
        /*Subjects teach by individual teacher*/
        $Subject = Subject::where('tutor_id','=',$tutor_id)
            ->paginate(6);

        return $Subject;
    }

}
