<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class HomeController extends Controller
{

    public function index()
{
    $users = Users::all();

    return view('admin/user-detail', ['users' => $users]);
}
public function view(){
    $users = Users::all();
    return view('admin/update-user', ['users'=> $users]);
}

public function adminupdateuser(){
    $users = Users::all();
    return view('admin/update-user', ['users'=> $users]);
}
}
