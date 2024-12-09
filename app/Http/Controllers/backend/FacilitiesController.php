<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facilities;
use App\Http\Requests\FacilitiesRequest;
use File;

class FacilitiesController extends Controller
{
    public function View(){
        $file=Facilities::orderby('id','desc')->get();
        return view('backend.facilities.view',['file'=>$file]);
    }

    public function Facilities(){
        return view('backend.facilities.create');
    }

    public function Store(FacilitiesRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/facilities/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data=Facilities::insert($data);
        return redirect()->route('view.facilities')->with('message','Data Inserted Successfully');

    }

    public function Edit($id){
        $data=Facilities::find($id);
        return view('backend.facilities.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data=Facilities::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/facilities/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/facilities/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.facilities')->with('message', 'Data Updated Successfully');        
   
    }
    public function Delete($id){
        $data=Facilities::find($id);
        $img_path=public_path('storage/facilities/').$data->image;
        if(file_exists($img_path) && $data->image!=null){
            unlink($img_path);
            $data->delete();
        }
        else{
            $data->delete();
        }
        return redirect()->back()->with('message','Data Deleted Successfully');
    }
}
