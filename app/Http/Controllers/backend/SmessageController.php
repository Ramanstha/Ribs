<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Smessage;
use App\Http\Requests\SmessageRequest;


class SmessageController extends Controller
{
    public function View(){
        $file=Smessage::orderBy('id','desc')->get();
        return view('backend.smessage.view',['file'=>$file]);
    }

    public function Smessage(){
        return view('backend.smessage.create');
    }

    public function Store(SmessageRequest $request){
        $data=$request->except('_token');
        $smessage = Smessage::insert($data);
        return redirect()->route('view.smessage')->with('message','Data Inserted Successfully !!!');
    }

    public function Edit($id){
        $data=Smessage::find($id);
        return view('backend.smessage.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data1=Smessage::find($id);
        $data=$request->except('_token');
        $data1->update($data);
        return redirect()->route('view.smessage')->with('message','Data Update Successfully !!!');
    }

    public function Delete($id){
        $data=Smessage::find($id);
        $data->delete();
        return redirect()->back()->with('message',"Data Deleted Successfully!!!");
    }
}
