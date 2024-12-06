<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use App\Http\Requests\ChangepasswordRequest;

class ChangepasswordController extends Controller
{
    public function changePassword(){

        return view('auth.changepassword');
    }

    public function updateNewPassword(ChangepasswordRequest $request){

        //Match The Old Password 
        if(!Hash::check($request->oldPass, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        //Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newPass)
        ]);

        return back()->with("status", "Password changed successfully!");
}

    }

