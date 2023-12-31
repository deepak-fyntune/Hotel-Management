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
        $post->email = $request->email;
        $post->password = $request->password;

        $post->save();
        return redirect('/login')->with('status', 'Registration Successfull');
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


    public function update(Request $request, $id)
    {
        $post = Users::find($id);

        if (!$post) {
            return redirect('detail-check')->with('error', 'User not found');
        }

        $post->name = $request->nname;
        $post->email = $request->email;

        // If you have other fields to update, add them here

        $post->save();

        return redirect('detail-check')->with('status', 'Update Successful');
    }
}
