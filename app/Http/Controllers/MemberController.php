<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    public function index()
    {
        return Member::find(1)->getCompany;
    }
    public function oneMany()
    {
        return Member::find(3)->getDevice;
    }
}
