<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutCategory;
use App\Models\AboutSubCategory;

class AboutSubCategoryController extends Controller
{
    public function viewAllaboutsubCategory(){
        $getallSubCategory=AboutSubCategory::with('category')->orderBy('id','desc')->get();
        return view('backend.aboutus.subcategory.view',compact('getallSubCategory'));
    }

    public function showaboutsubCategoryForm(){
        $getCategory=AboutCategory::orderBy('id','desc')->where('status',1)->get();
        return view('backend.aboutus.subcategory.create',compact('getCategory'));
    }

    public function storeaboutsubCategory(Request $request){
        $request->validate([
            'category_id'=>'required',
            'title'=>'required',
            'status'=>'required'
        ]);
        $getallSubCategory=$request->except('_token');
        AboutSubCategory::create($getallSubCategory);
        return redirect()->route('view.aboutsubcategory')->with('message','SubCategory Add Successfully');
    }

    public function editaboutsubCategory($id){
        $getSinglesubcategory=AboutSubCategory::findOrFail($id);
        $getCategory=ProgramCategory::orderBy('id','desc')->where('status',1)->get();
        return view('backend.aboutus.subcategory.edit',compact('getSinglesubcategory','getCategory')); 
    }

    public function updateaboutsubCategory(Request $request,$id){
        $request->validate([
            'category_id'=>'required',
            'title'=>'required',
            'status'=>'required'
        ]);
        $getupdatesubCategory=$request->except('_token');
        $updatesubCategory=AboutSubCategory::where('id',$id)->update($getupdatesubCategory);
        return redirect()->route('view.aboutsubcategory')->with('message','SubCategory Update Successfully');
    }

    public function deleteaboutsubCategory($id){
        $data=AboutSubCategory::find($id);
        $data->delete();
        return redirect()->back()->with('message',"SubCategory Deleted Successfully!!!");
    }

    public function Status(Request $request){
        $categoryStatus = AboutSubCategory::find($request->category_id);
        $categoryStatus->status=$request->categorystatus;
        $categoryStatus->save();
        return response()->json(['success'=>'SubCategory status change successfully.']);
    }
}
