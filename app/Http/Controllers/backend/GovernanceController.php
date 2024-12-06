<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Governance;
use App\Models\Category;
use App\Http\Requests\GovernanceRequest;
use File;

class GovernanceController extends Controller
{
    public function View(){
        $data=Governance::orderBy('id','desc')->with('category')->get();
        return view('backend.governance.view',['data'=>$data]);
    }

    public function CampusAssembly(){
        $getCategory=Category::orderBy('id','desc')->where('status',1)->get();
        return view('backend.governance.create',compact('getCategory'));
    }
    
    public function selectCategory(Request $request)
    {
         
        $parent_id = $request->cat_id;  
        $subcategories = Category::where('type',$parent_id)->with('subcategories')->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }
    public function Store(GovernanceRequest $request){
        $data=$request->except('_token','image');
        if($request->file('image')){
        $filename = $request->file('image');
        $file = time() . '-' . 'governace-image' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('storage/governance/');
        $filename->move($destination, $file);
        $data['image']=$file;
        }

        $data =Governance::insert($data);
        return redirect()->route('view.governance')->with('message','Data Inserted Successfully !!!');
    }
    public function Edit($id){
        $data=Governance::find($id);
        $getcategory=Category::orderBy('id','desc')->where('status',1)->get();
        return view('backend.governance.edit',compact('data','getcategory'));
    }

    public function Update(Request $request,$id){
        $data1=Governance::find($id);
        $data = $request->except('_token','image');
        if ($request->file('image')){
            File::delete(public_path('storage/governance/'.$data1->image));
            $filename = $request->file('image');
            $file = time() . '-' . 'image' . '.' . $filename->getClientOriginalExtension();
            $destination=public_path('storage/governance/');
            $filename->move($destination,$file);
            $data['image']=$file;
        }

        $data1->update($data);
        return redirect()->route('view.governance')->with('message','Data Update Successfully !!!');
    }

    public function Governancestatus(Request $request){
        $governanceStatus = Governance::find($request->governance_id);
        $governanceStatus->status=$request->governancestatus;
        $governanceStatus->update();
        return response()->json(['status change']);
    }

    public function Delete($id){
        $data=Governance::find($id);
        $img_path=public_path('storage/governance/').$data->image;
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
