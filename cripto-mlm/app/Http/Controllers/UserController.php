<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function refer($id)
    {
        $user = User::find($id);
        dd($user);
        return back();
    }
}
