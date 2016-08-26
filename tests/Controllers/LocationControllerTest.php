<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LocationControllerTest extends TestCase
{
    use DatabaseMigrations;


    public function testFirstTestCase(){
        $Data = 1;
         $this->assertEquals(1, $Data);

    }

    // /**
    //  * A basic functional test example.
    //  *
    //  * @return void
    //  */

    // public function testListOfCityFailed()
    // {

    //     $city = $this->call('GET','city');

    //     $this->assertEquals(0, count($city));
    // }
}
