<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramCategory;
use App\Models\ProgramSubCategory;

class ProgramSubCategoryController extends Controller
{
    public function viewAllprogramsubCategory(){
        $getallSubCategory=ProgramSubCategory::with('category')->orderBy('id','desc')->get();
        return view('backend.academic.subcategory.view',compact('getallSubCategory'));
    }

    public function showprogramsubCategoryForm(){
        $getCategory=ProgramCategory::orderBy('id','desc')->where('status',1)->get();
        return view('backend.academic.subcategory.create',compact('getCategory'));
    }

    public function storeprogramsubCategory(Request $request){
        $request->validate([
            'category_id'=>'required',
            'title'=>'required',
            'status'=>'required'
        ]);
        $getallSubCategory=$request->except('_token');
        ProgramSubCategory::create($getallSubCategory);
        return redirect()->route('view.programsubcategory')->with('message','SubCategory Add Successfully');
    }

    public function editprogramsubCategory($id){
        $getSinglesubcategory=ProgramSubCategory::findOrFail($id);
        $getCategory=ProgramCategory::orderBy('id','desc')->where('status',1)->get();
        return view('backend.academic.subcategory.edit',compact('getSinglesubcategory','getCategory')); 
    }

    public function updateprogramsubCategory(Request $request,$id){
        $request->validate([
            'category_id'=>'required',
            'title'=>'required',
            'status'=>'required'
        ]);
        $getupdatesubCategory=$request->except('_token');
        $updatesubCategory=ProgramSubCategory::where('id',$id)->update($getupdatesubCategory);
        return redirect()->route('view.programsubcategory')->with('message','SubCategory Update Successfully');
    }

    public function deleteprogramsubCategory($id){
        $data=ProgramSubCategory::find($id);
        $data->delete();
        return redirect()->back()->with('message',"SubCategory Deleted Successfully!!!");
    }

    public function Status(Request $request){
        $categoryStatus = ProgramSubCategory::find($request->category_id);
        $categoryStatus->status=$request->categorystatus;
        $categoryStatus->save();
        return response()->json(['success'=>'SubCategory status change successfully.']);
    }
}
