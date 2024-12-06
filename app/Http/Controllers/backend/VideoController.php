<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\VideoRequest;
use App\Models\Video;

class VideoController extends Controller
{
    public function View(){
        $file=Video::orderby('id','desc')->get();
        return view('backend.video.view',['file'=>$file]);
    }

    public function Video(){
        return view('backend.video.create');
    }

    public function Store(VideoRequest $request){

        $data=$request->except('_token');
        $data=Video::insert($data);
        return redirect()->route('view.video')->with('message','Data Inserted Successfully');

    }

    public function edit($id){
        $data=Video::find($id);
        return view('backend.video.edit',['data'=>$data]);
    }

    public function update(Request $request,$id){
        $data=Video::find($id);
        $data1=$request->except('_token');
        $data->update($data1);
        return redirect()->route('view.video')->with('message', 'Data Updated Successfully');        
   
    }

    public function Videostatus(Request $request){
        $video = Video::find($request->video_id);
        $video->status=$request->videostatus;
        $video->save();
        return response()->json(['status change']);
    }

    public function delete($id){
        $data=Video::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
