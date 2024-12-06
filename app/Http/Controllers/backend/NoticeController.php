<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use App\Http\Requests\NoticeRequest;
use File;

class NoticeController extends Controller
{
    public function View(){
        $file = Notice::orderby('id','desc')->get();
        return view('backend.notice.view',['file'=>$file]);
    }

    public function Notice(){
        return view('backend.notice.create');
    }

    Public function Store(NoticeRequest $request){
        $data = $request->except('_token','pdf','image','date');
       
    if ($request->file('image')){
        $filename1 = $request->file('image');
        $file1 = time() . $request->title . 'image' . '.' . $filename1->getClientOriginalExtension();
        $destination = public_path('storage/notice/');
        $filename1->move($destination, $file1);
        $data['image']=$file1;
        }
        
       $notice = Notice::insert($data);
        return redirect()->route('view.notice')->with('message','Data Inserted Successfully !!!');

    }

    public function Edit($id){
        $data=Notice::find($id);
        return view('backend.notice.edit',['data'=>$data]);
    }

    public function Update(NoticeRequest $request,$id){
        $data1=Notice::find($id);
        $data = $request->except('_token','pdf','image');
        
        if ($request->file('image')){
            File::delete(public_path('storage/notice/'.$data1->image));
            $filename1 = $request->file('image');
            $file1 = time() . $request->title . 'image' . '.' . $filename1->getClientOriginalExtension();
            $destination=public_path('storage/notice/');
            $filename1->move($destination,$file1);
            $data['image']=$file1;
        }
        
        $data1->update($data);
        return redirect()->route('view.notice')->with('message','Data Updated Successfully!!!');
    }

    public function Noticestatus(Request $request){
        $notice = Notice::find($request->notice_id);
        $notice->status=$request->noticestatus;
        $notice->save();
        return response()->json(['status change']);
    }

    public function Delete($id){
        $data=Notice::find($id);
        $pdf_path=public_path('storage/notice/').$data->pdf;
        if(file_exists($pdf_path) && $data->pdf!=null){
            unlink($pdf_path);
            $data->delete();
        }
        else{
            $data->delete();
        }

        $img_path=public_path('storage/notice/').$data->image;
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