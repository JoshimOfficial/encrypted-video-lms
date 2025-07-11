<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{

    public function redirectToGoogle(Request $request)
    {
        $userType = $request->userType;
        // return $userType;

        if($userType == 'teacher') {
            Session::put('userType', 'teacher');
        } elseif($userType == 'admin') {
            Session::put('userType', 'admin');
        } else {
            Session::put('userType', 'student');
        }

        // return Socialite::driver('google')->redirect();
        return redirect()->route('google.login');
    }


}
