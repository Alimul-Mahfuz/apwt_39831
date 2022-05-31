<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page_Controller extends Controller
{
    //control pages
    function home(){
        return view('Home');
    }
    function Aboutus(){
        return view('aboutus');
    }
    function ContactUs(){
        return view('Contact');
    }
}
