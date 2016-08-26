<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\City;

class Location extends Controller
{
    /**City Fetching Mechanism
     * @return All City from Database
     */
    public function getCity()
    {
        $CityName  = City::all();
        return $CityName;
    }


    /**
     * @param $city_id
     * @return List of Areas Belong to Param City
     */
    public function getArea($city_id)
    {
        $AreaList = City::find($city_id)->Areas;
        return $AreaList;
    }
}
