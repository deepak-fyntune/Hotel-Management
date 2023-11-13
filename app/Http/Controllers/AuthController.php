<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function adminlogin(Request $request){
        dd($request->all());
    }
}
