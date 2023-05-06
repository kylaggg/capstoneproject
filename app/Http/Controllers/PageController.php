<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // User Authentication
    public function login(){
        return view('auth.login');
    }

    public function twoFactorAuth(){
        return view('auth.two-factor');
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }

    public function forgotPassword(Request $request){
        $stage = $request->input('stage', 1);
        return view('auth.forgot_password', compact('stage'));
    }

}
