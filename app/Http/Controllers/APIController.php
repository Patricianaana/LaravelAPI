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

    public function addDevice(Request $req)
    {
        $device= new Device;
        $device->device_name=$req->device_name;
        $device->member_id=$req->member_id;
        $results=$device->save();
    
        if($results)
        {
            return ["Results"=>"Device added successfully"];
        }
        else
        {
            return ["Result"=>"Addition operation failed"];
        }
       
    }

    public function updateDevice(Request $req){
        $device = Device::find($req->id);
        $device->device_name=$req->device_name;
        $device->member_id=$req->member_id;
        $result=$device->save();

        if($result)
        {
            return ["Result"=>"device updated successfully"];
        }
        else
        {
            return ["Result"=>"update operation failed!!"];
        }

        

    }

}
