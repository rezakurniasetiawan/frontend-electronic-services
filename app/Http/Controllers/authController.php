<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function login()
    {
        if (Auth::check()) {

            return redirect()->route('dashboard.index');
        } else {
            return view('auth.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $credentials  = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
        } else {
            Session::flash('error', 'email atau Password Salah');
            return redirect()->route('login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
