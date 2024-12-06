<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Socialmedia;
use App\Http\Requests\SocialmediaRequest;

class SocialmediaController extends Controller
{
    public function View(){
        $file=Socialmedia::orderBy('id','desc')->get();
        return view('backend.socialmedia.view',['file'=>$file]);
    }

    public function Socialmedia(){
        return view('backend.socialmedia.create');
    }

    public function Store(SocialmediaRequest $request){
        $data=$request->except('_token');
        $socialmedia = Socialmedia::insert($data);
        return redirect()->route('view.socialmedia')->with('message','Data Inserted Successfully !!!');
    }

    public function Edit($id){
        $data=Socialmedia::find($id);
        return view('backend.socialmedia.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data1=Socialmedia::find($id);
        $data=$request->except('_token');
        $data1->update($data);
        return redirect()->route('view.socialmedia')->with('message','Data Update Successfully !!!');
    }

    public function Delete($id){
        $data=Socialmedia::find($id);
        $data->delete();
        return redirect()->back()->with('message',"Data Deleted Successfully!!!");
    }
}
