<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function add_user(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:3|max:191',
            'email' => 'required|email',
            'password' =>'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = \Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        return redirect('/dashboard')->with('success' , 'New user added......');
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/dashboard')->with('success' , 'User data delete......');
    }
}
