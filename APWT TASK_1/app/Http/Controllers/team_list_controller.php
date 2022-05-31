<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class team_list_controller extends Controller
{
    //print list

    function PrintTeamList(){
        $nameList=['Abdul Wazed','Alimul Mahfuz','Hossain Kabir', 'Nafisa Molla'];
        $departmentList = ['IT','Marketing','Accounting','Finance'];
        $TeamList = array();
        for($i=0;$i<4;$i++){
            $Teams=array(
                "MemberId"=>"01AC".$i,
                "Name"=>$nameList[$i],
                "Department"=>$departmentList[$i],
                "Address"=>"Dhaka" 
            );
        $TeamList[]=(object)$Teams;
        }
        return view('team')->with('teamList',$TeamList);
    }

}
