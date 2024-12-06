<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AboutusRequest;
use App\Models\Aboutus;
use App\Models\AboutCategory;
// use App\Models\AboutSubCategory;
use File;

class AboutusController extends Controller
{
    public function View(){
        $file=Aboutus::orderby('id','desc')->get();
        return view('backend.aboutus.view',['file'=>$file]);
    }

    public function Aboutus(){
        $getCategory=AboutCategory::orderBy('id','desc')->where('status',1)->get();
        // $getsubCategory=AboutSubCategory::orderBy('id','desc')->where('status',1)->get();
        return view('backend.aboutus.create',compact('getCategory'));
    }

    public function selectaboutCategory(Request $request){
        $category_id = $request->cat_id;  
        // $subcategories = AboutSubCategory::where('status',1)->where('category_id',$category_id)->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }

    public function Store(AboutusRequest $request){

        $data=$request->except('_token','image');
        $filename = $request->file('image');        
        $file = time() . '-' . 'image' . '.' .$filename->getClientOriginalExtension();
        $destination = public_path('storage/aboutus/');
        $filename-> move($destination, $file);
        $data['image']=$file;
        $data=Aboutus::insert($data);
        return redirect()->route('view.aboutus')->with('message','Data Inserted Successfully');

    }

    public function Edit($id){
        $data=Aboutus::find($id);
        $getCategory=AboutCategory::orderBy('id','desc')->where('status',1)->get();
        // $getsubCategory=AboutSubCategory::orderBy('id','desc')->where('status',1)->get();
        return view('backend.aboutus.edit',['data'=>$data,'getCategory'=>$getCategory]);
    }

    public function Update(Request $request,$id){
        $data=Aboutus::find($id);
        $data1=$request->except('_token','image');
        if($request->file('image')){
                File::delete(public_path('storage/aboutus/'.$data->image));
                $filename=$request->file('image');
                $file= time(). '-'. 'image'. $filename->getClientOriginalExtension();
                $destination=public_path('storage/aboutus/');
                $filename->move($destination,$file);
                $data1['image']=$file;
        }
        $data->update($data1);
        return redirect()->route('view.aboutus')->with('message', 'Data Updated Successfully');        
   
    }
    public function Delete($id){
        $data=Aboutus::find($id);
        $img_path=public_path('storage/aboutus/').$data->image;
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
