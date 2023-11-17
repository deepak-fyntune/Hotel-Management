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
public function view($id){
    $user = Users::find($id);

    if (!$user) {
        abort(404);
    }

    return view('admin/update-user', ['user' => $user]);
}

// public function adminupdateuser(){
//     $users = Users::all();
//     return view('admin/update-user', ['users'=> $users]);
// }
}
