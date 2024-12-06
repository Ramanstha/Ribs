<?php

namespace App\Http\Controllers\Userauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use App\Models\UserLogin;
use Auth;
use Session;

class LoginController extends Controller
{
    public function UserLogin(){
        return view('userauth.login');
    }

    public function UserPostLogin(UserLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('user')->attempt($credentials)) {
            return redirect()->route('Home');
        }
        return redirect()->back()->with('message','Login details are not valid');
    }
    
    public function UserLogout() {
        Session::flush();
        Auth::logout();
  
        return redirect()->route('Home');
    }
}
