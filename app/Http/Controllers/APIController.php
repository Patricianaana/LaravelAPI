<?php

namespace App\Http\Controllers;
use App\Models\Device;
use Illuminate\Support\Facades\Validator;

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

    public function deleteDevice($id)
    {
        $device= Device::find($id);
        $result=$device->delete();
        if($result)
        {
            return ["result"=>"record deleted successfully"];
        }
        else
        {
            return["result"=>"delete operation failed"];
        }
        
    }

    public function searchDevice($device_name)
    {
        return Device::where("device_name","like","%".$device_name."%")->get();
    }

    public function testData(Request $req)
    {
        $rules=array(
            "device_name"=>"required",
            "member_id"=>"required|min:1|max:3"
        );

        $validator= Validator::make($req->all(), $rules);
        if($validator->fails())
        {
            // return $validator->errors();
            return response()->json($validator->errors(),401);
        }
        else{
           $device = new Device;
           $device->device_name=$req->device_name;
           $device->member_id=$req->member_id;
           $result=$device->save();
           if($result)
           {
            return["result"=>"Data saved successfully"];
           }
           else
           {
            return["result"=>"Operation failed"];

           }
        }
    }

    public function uploadFile(Request $req)
    {
        $result = $req->file('file')->store('apiDocs');
        return ["result" => $result];
    }
}
