<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    //
    function getData(){
        return["name"=>"Tricia", "age"=>16, "email"=>"tricia@gmail.com", "address"=>"South Korea"];
    }
}
