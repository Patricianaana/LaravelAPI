<?php

namespace App\Http\Controllers;
use App\Models\Device;

use Illuminate\Http\Request;

class APIController extends Controller
{
    //
    public function getData(){
        return["name"=>"Tricia", "age"=>16, "email"=>"tricia@gmail.com", "address"=>"South Korea"];
    }

    public function deviceList()
    {
        return Device::all();
    }

}
