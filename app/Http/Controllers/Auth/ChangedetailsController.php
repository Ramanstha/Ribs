<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Http\Requests\ChangedetailsRequest;


class ChangedetailsController extends Controller
{
    public function changeDetails(){

        return view('auth.changedetails');
    }

    public function updateDetails(ChangedetailsRequest $request){

        $userDetail =Auth::user();
        $userDetail->name = $request['name'];
        $userDetail->email = $request['email'];
        $userDetail->save();
        return back()->with('status','User Details Updated Successfully!!!');

    }
}
