<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class User extends Controller
{
    public function showuser(){
        return "<h1> Hello, How are you??? </h1>";
    }
    public function store(Request $request)
    {
        $post = new Users;
        $post->name = $request->nname;
        $post->username = $request->uname;
        $post->email = $request->email;
        $post->password = $request->password;

        $post->save();
        return redirect('/')->with('status', 'Registration Successfull');
    }


    public function store_admin(Request $request)
    {
        $post = new Users;
        $post->name = $request->nname;
        $post->email = $request->email;
        $post->password = $request->password;

        $post->save();
        // dd('Before redirect');

        return redirect('admin-panel')->with('status', 'Registration Successful');
    }
    public function destroy($id)
    {
        $user = Users::find($id);
        $user->delete();

        return redirect('detail-check')->with('status', 'User deleted successfully');
    }
}
