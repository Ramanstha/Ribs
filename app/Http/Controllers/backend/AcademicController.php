<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AcademicRequest;
use App\Models\Academic;
use App\Models\ProgramCategory;
use App\Models\ProgramSubCategory;
use File;

class AcademicController extends Controller
{
    public function View(){
        $file = Academic::with('category')->orderby('id','desc')->get();
        $file = Academic::with('Subcategory')->orderby('id','desc')->get();
        return view('backend.academic.view',['file'=>$file]);
    }

    public function Academic(){
        $getCategory=ProgramCategory::orderBy('id','desc')->where('status',1)->get();
        $getsubCategory=ProgramSubCategory::orderBy('id','desc')->where('status',1)->get();
        return view('backend.academic.create',compact('getCategory','getsubCategory'));
    }

    public function selectprogramCategory(Request $request){
        $category_id = $request->cat_id;  
        $subcategories = ProgramSubCategory::where('status',1)->where('category_id',$category_id)->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }

    Public function Store(AcademicRequest $request){
        $data = $request->except('_token','image');
    if ($request->file('image')){
        $filename1 = $request->file('image');
        $file1 = time() . '-' . 'image' . '.' . $filename1->getClientOriginalExtension();
        $destination = public_path('storage/academic/');
        $filename1->move($destination, $file1);
        $data['image']=$file1;
        }
        $academic = Academic::insert($data);
        return redirect()->route('view.academic')->with('message','Data Inserted Successfully !!!');

    }

    public function Edit($id){
        $data=Academic::find($id);
        $getCategory=ProgramCategory::orderBy('id','desc')->where('status',1)->get();
        $getsubCategory=ProgramSubCategory::orderBy('id','desc')->where('status',1)->get();
        return view('backend.academic.edit',['data'=>$data,'getCategory'=>$getCategory,'getsubCategory'=>$getsubCategory]);
    }

    public function Update(Request $request,$id){
        $data1=Academic::find($id);
        $data = $request->except('_token','image');
        if ($request->file('image')){
            File::delete(public_path('storage/academic/'.$data1->image));
            $filename1 = $request->file('image');
            $file1 = time() . '-' . 'image' . '.' . $filename1->getClientOriginalExtension();
            $destination=public_path('storage/academic/');
            $filename1->move($destination,$file1);
            $data['image']=$file1;
        }
        
        $data1->update($data);
        return redirect()->route('view.academic')->with('message','Data Updated Successfully!!!');
    }

    public function Delete($id){
        $data=Academic::find($id);
        $img_path=public_path('storage/academic/').$data->image;
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
