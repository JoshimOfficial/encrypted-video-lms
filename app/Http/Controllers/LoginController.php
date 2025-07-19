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

        if($userType == 'teacher') {
            Session::put('userType', 'teacher');
        }else {
            Session::put('userType', 'student');
        }
        // return $userType;

        // return Socialite::driver('google')->redirect();
        return redirect()->route('google.login');
    }


}
