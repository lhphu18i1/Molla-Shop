<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.user.login');
    }
    public function showRegister()
    {
        return view('auth.user.register');
    }
    public function postRegister(RegisterRequest $request){
        $user = User::where('email', $request->email)->first();
            if(!$user){
                $newUser = new User();
                $newUser->name = $request->name;
                $newUser->email = $request->email;
                $newUser->phone = $request->phone;
                $newUser->password = bcrypt($request->password);
                $newUser->save();
                return redirect()->route('get.user.login');
            }else{
                return redirect()->route('get.user.register');
            }

    }
    public function postLogin(Request $request){
        $credentials = $request->only(['email', 'password']);
        if (Auth::attempt($credentials)) {
            return redirect()->route('get.view.home');
        } else {
            return redirect()->back()->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('get.user.login');
    }
}
