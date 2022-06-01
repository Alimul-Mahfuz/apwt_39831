<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product_controller extends Controller
{
    //Product List
    function PrintProductList(){
        $ProductNameList=['Samsung galaxy z2','amsung galaxy z Fold','iPhone 5', 'Samsung galaxy A20'];
        $color=['Orange','Pitch','White','Black','Blue'];
        $ProductList = array();
        for($i=0;$i<count($ProductNameList);$i++){
            $Products=array(
                "ProductId"=>$i,
                "Name"=>$ProductNameList[$i],
                "Color"=>$color[$i]

            );
        $ProductList[]=(object)$Products;
        }
        return view('product')->with('PList',$ProductList);
    }

}
