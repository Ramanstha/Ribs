<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutCategory;

class AboutCategoryController extends Controller
{
    public function viewAllaboutCategory(){
        $getallCategory=AboutCategory::orderBy('id','desc')->get();
        return view('backend.aboutus.category.view',compact('getallCategory'));
    }

    public function showaboutCategoryForm(){
        return view('backend.aboutus.category.create');
    }

    public function storeaboutCategory(Request $request){
        $request->validate([
            'title'=>'required',
            'order'=>'required',
            'status'=>'required'
        ]);
        $getallCategory=$request->except('_token');
        AboutCategory::create($getallCategory);
        return redirect()->route('view.aboutcategory')->with('message','Category Add Successfully');
    }

    public function editaboutCategory($id){
        $getSinglecategory=AboutCategory::findOrFail($id);
        return view('backend.aboutus.category.edit',compact('getSinglecategory')); 
    }

    public function updateaboutCategory(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'order'=>'required',
            'status'=>'required'
        ]);
        $getupdateCategory=$request->except('_token');
        $updateCategory=AboutCategory::where('id',$id)->update($getupdateCategory);
        return redirect()->route('view.aboutcategory')->with('message','Category Update Successfully');
    }

    public function deleteaboutCategory($id){
        $data=AboutCategory::find($id);
        $data->delete();
        return redirect()->back()->with('message',"Category Deleted Successfully!!!");
    }

    public function Status(Request $request){
        $categoryStatus = AboutCategory::find($request->category_id);
        $categoryStatus->status=$request->categorystatus;
        $categoryStatus->save();
        return response()->json(['success'=>'Category status change successfully.']);
    }
}
