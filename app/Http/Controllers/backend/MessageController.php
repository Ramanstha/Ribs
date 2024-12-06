<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Models\Message;
use File;

class MessageController extends Controller
{
    public function View(){
        $file=Message::orderBy('id','desc')->get();
        return view('backend.message.view',['file'=>$file]);
    }

    public function Message(){
        return view('backend.message.create');
    }

    Public function Store(MessageRequest $request){
        $data = $request->except('_token','image');        
        $filename = $request->file('image');
        $file = time() . '-' . 'image' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('storage/message/');
        $filename->move($destination, $file);
        $data['image']=$file;
        
       $message = Message::insert($data);
        return redirect()->route('view.message')->with('message','Data Inserted Successfully !!!');

    }

    public function Edit($id){
        $data=Message::Find($id);
        return view('backend.message.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data1=Message::find($id);
        $data = $request->except('_token','image');
        if ($request->file('image')){
            File::delete(public_path('storage/message/'.$data1->image));
            $filename = $request->file('image');
            $file = time() . '-' . 'image' . '.' . $filename->getClientOriginalExtension();
            $destination=public_path('storage/message/');
            $filename->move($destination,$file);
            $data['image']=$file;
        }
        
        $data1->update($data);
        return redirect()->route('view.message')->with('message','Data Updated Successfully!!!');
    }

    
    public function Delete($id){
        $data=Message::find($id);
        $img_path=public_path('storage/message/').$data->image;
        if(file_exists($img_path) && $data->image!=null){
            unlink($img_path);
            $data->delete();
        }
        else{
            $data->delete();
        }
        return redirect()->back()->with('message',"Data Deleted Successfully!!!");
    }
}
