<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function viewAllCategory(){
        $getallCategory=Category::orderBy('id','desc')->get();
        return view('backend.category.view',compact('getallCategory'));
    }

    public function showCategoryForm(){
        return view('backend.category.create');
    }

    public function storeCategory(Request $request){
        $request->validate([
            'type'=>'required',
            'category_name'=>'required'
        ]);
        $getallCategory=$request->except('_token');
        Category::create($getallCategory);
        return redirect()->route('view.category')->with('message','Category Add Successfully');
    }

    public function editCategory($id){
        $getSinglecategory=Category::findOrFail($id);
        return view('backend.category.create',compact('getSinglecategory')); 
    }

    public function updateCategory(Request $request,$id){
        $request->validate([
            'type'=>'required',
            'category_name'=>'required'
        ]);
        $getupdateCategory=$request->except('_token');
        $updateCategory=Category::where('id',$id)->update($getupdateCategory);
        return redirect()->route('view.category')->with('message','Category Update Successfully');
    }

    public function deleteCategory($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back()->with('message',"Category Deleted Successfully!!!");
    }

    public function Status(Request $request){
        $categoryStatus = Category::find($request->category_id);
        $categoryStatus->status=$request->categorystatus;
        $categoryStatus->save();
        return response()->json(['success'=>'Category status change successfully.']);
    }
}
