<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Model\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class authController extends Controller
{
    function addUser(Request $req)
    {

        if (User::where('email', $req->email)->first()) {
            return response()([
                'message' => 'email exist',
                'status' => 'failed'
            ]);
        }

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password=$req->password;
        $user->remember_token = $req->remember_token;
        return redirect();

    }

    function loginUser(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $request->remember_token;
        if ( $user ($request->password : $user->password)) {
            return redirect();
        }else{
            return response()([
                'message'=>'incorrect credentials',
                'status'=>'Error 402'
            ]);
        }
    }

    function logoutUser(Request $request){
        Auth::logout();
        return redirect();
    }

}
