<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function refer($username)
    {
        
        return view('auth.register')->with('username', $username);
    }       
    public function store(Request $request)
    {
        $strArr = explode("_", $username);
        //print_r($strArr);
        if(count($strArr) == 2){
            echo $strArr[1];
        }else{
            echo $username;
        }
    }
}
