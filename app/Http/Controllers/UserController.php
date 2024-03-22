<?php

namespace App\Http\Controllers;
use App\Models\Registration;
use App\Models\Owner;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $req){
        $data = new Registration;
        $data->user_name=$req->user_name;
        $data->email=$req->email;
        $data->password=$req->password;

        $data->save();
    }
}
