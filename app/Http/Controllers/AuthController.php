<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|ends_with:adamson.edu.ph',
            'password' => 'required|max:20',
        ], [
            'email.required' => 'Please enter your Adamson email address.',
            'email.ends_with' => 'Please enter your Adamson email address',
            'email.email' => 'Please enter a valid email address.',
            'password.required' => 'Please enter your password.',
            'password.min' => 'Password must be at least 8 characters long.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $accounts = Accounts::where('email', '=', $request->email)->first();

        if ($accounts) {
            if ($accounts->status == "active") {
                if (Hash::check($request->password, $accounts->password)) {
                    $request->session()->put('account_id', $accounts->account_id);
                    return redirect('twoFactorAuth');
                } else {
                    return back()->with('fail', 'Incorrect Password.');
                }
            } else {
                return back()->with('fail', 'User deactivated. Please contact your HR adminstrator.');
            }
        } else {
            return back()->with('fail', 'User not found. Please contact your HR adminstrator.');
        }
    }

    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|ends_with:adamson.edu.ph'
        ], [
            'email.required' => 'Please enter your Adamson email address.',
            'email.ends_with' => 'Please enter your Adamson email address',
            'email.email' => 'Please enter a valid email address.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $accounts = Accounts::where('email', '=', $request->email)->first();

        if ($accounts) {
            if ($accounts->status == "active") {
                $code = rand(1000, 9999);
                $accounts->two_factor_code = $code;
                return view('dashboard');
            } else {
                return back()->with('fail', 'User deactivated. Please contact your HR adminstrator.');
            }
        } else {
            return back()->with('fail', 'User not found. Please contact your HR adminstrator.');
        }
    }
}
