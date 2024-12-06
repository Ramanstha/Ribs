<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramCategory;

class ProgramCategoryController extends Controller
{
    public function viewAllprogramCategory(){
        $getallCategory=ProgramCategory::orderBy('id','desc')->get();
        return view('backend.academic.category.view',compact('getallCategory'));
    }

    public function showprogramCategoryForm(){
        return view('backend.academic.category.create');
    }

    public function storeprogramCategory(Request $request){
        $request->validate([
            'title'=>'required',
            'order'=>'required',
            'status'=>'required'
        ]);
        $getallCategory=$request->except('_token');
        ProgramCategory::create($getallCategory);
        return redirect()->route('view.programcategory')->with('message','Category Add Successfully');
    }

    public function editprogramCategory($id){
        $getSinglecategory=ProgramCategory::findOrFail($id);
        return view('backend.academic.category.edit',compact('getSinglecategory')); 
    }

    public function updateprogramCategory(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'order'=>'required',
            'status'=>'required'
        ]);
        $getupdateCategory=$request->except('_token');
        $updateCategory=ProgramCategory::where('id',$id)->update($getupdateCategory);
        return redirect()->route('view.programcategory')->with('message','Category Update Successfully');
    }

    public function deleteprogramCategory($id){
        $data=ProgramCategory::find($id);
        $data->delete();
        return redirect()->back()->with('message',"Category Deleted Successfully!!!");
    }

    public function Status(Request $request){
        $categoryStatus = ProgramCategory::find($request->category_id);
        $categoryStatus->status=$request->categorystatus;
        $categoryStatus->save();
        return response()->json(['success'=>'Category status change successfully.']);
    }
}
