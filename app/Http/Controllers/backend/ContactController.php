<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Usercontact;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function View(){
        $file=Contact::orderby('id','desc')->get();
        return view('backend.contact.view',['file'=>$file]);
    }

    public function Contact(){
        return view('backend.contact.create');
    }

    public function Store(ContactRequest $request){

        $data=$request->except('_token');
        $data=Contact::insert($data);
        return redirect()->route('view.contact')->with('message','Data Inserted Successfully');

    }

    public function Edit($id){
        $data=Contact::find($id);
        return view('backend.contact.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Contact::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.contact')->with('message', 'Data Updated Successfully');
    }

    public function Delete($id){
        $data=Contact::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }

    public function viewUserMessage($id){
        $userMessage=Usercontact::findOrfail($id);
        return view('backend.contact.user_contact_detail',['userMessage'=>$userMessage]);
    }

    public function viewUserContactMessage(){
        $userContactMessage=Usercontact::orderby('id','desc')->get();
        return view('backend.contact.user_contact',['userContactMessage'=>$userContactMessage]);
    }

    public function userMessageDelete($id){
        $userMessageDelete=Usercontact::find($id);
        $userMessageDelete->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
