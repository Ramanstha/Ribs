<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usercontact;

class ContactusController extends Controller
{
    public function getUserContact(){
        return view('frontend.contact.contact');
    }

    public function storeUserContact(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'address'=>'required',
            'message'=>'required'
        ]);
        $storeContact=$request->except('_token');
        Usercontact::insert($storeContact);
        return back()->with('message','Message Send Successfully');
    }
}
