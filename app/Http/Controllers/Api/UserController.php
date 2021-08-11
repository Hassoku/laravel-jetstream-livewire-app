<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getAllUser(){
        $users = User::all();
        $result = "";
        $users ? $result = response()->json($users) :  $result = response()->json("No Records Found");
        return $result;

    }

}
