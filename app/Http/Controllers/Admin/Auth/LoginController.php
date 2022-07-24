<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.admin.login');
    }
    public function postLogin(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('get.dashboard');
        } else {
            return redirect()->back()->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('get.admin.login');
    }
}

