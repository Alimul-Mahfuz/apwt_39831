<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class team_list_controller extends Controller
{
    //print list
    function PrintList(){
        $TeamList = array();
        for($i=0;$i<5;$i++){
            $Teams=[
                "MemberId"=>"01AC".$i,
                "Name"=>"Md. Golam Mazed",
                "Department"=>"Marketing".$i+1,
                "Address"=>"Dhaka" 
            ];
        $TeamList=(object)$Teams;
        }
    }

}
