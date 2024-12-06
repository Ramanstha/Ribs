<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\IQACActivities;
use Illuminate\Http\Request;
use App\Http\Requests\IQACActivitiesRequest;
use File;
class IQACActivitiesController extends Controller
{
    public function View(){
        $data=IQACActivities::orderBy('id','desc')->get();
        return view('backend.iqacactivities.view',['data'=>$data]);
    }

    public function IqacActivities(){
        return view('backend.iqacactivities.create');
    }

    public function Store(IQACActivitiesRequest $request){
        $iqac_store=$request->except('_token','image');
        if ($request->file('image')){
            $filename1 = $request->file('image');
            $file1 = time() . '-' . 'image' . '.' . $filename1->getClientOriginalExtension();
            $destination = public_path('storage/iqacactivities/');
            $filename1->move($destination, $file1);
            $iqac_store['image']=$file1;
            }
           $iqac = IQACActivities::insert($iqac_store);
            return redirect()->route('view.iqac')->with('message','Data Inserted Successfully !!!');
    
    }
   
    public function Edit($id){
        $data=IQACActivities::find($id);
        return view('backend.iqacactivities.edit',['data'=>$data]);
    }

    public function Update(IQACActivitiesRequest $request,$id){
        $data1=IQACActivities::find($id);
        $data=$request->except('_token','image');
        if ($request->file('image')){
            File::delete(public_path('storage/iqacactivities/'.$data1->image));
                $filename=$request->file('image');
                $file = rand(1,3333) . '-' . 'image' . '.' . $filename->getClientOriginalExtension();
                $destination = public_path('storage/iqacactivities/');
                $filename->move($destination, $file);
                $data1['image'] = $file;
            }
           
            $data1->update($data);        
        return redirect()->route('view.iqac')->with('message','Data Update Successfully !!!');
    }

    public function IQACstatus(Request $request){
       
        $governance = IQACActivities::find($request->governance_id);
        if($request->governancestatus == 0)
        {
            $governance->status=1;
        } else {
            $governance->status=0;
        }
        
        $governance->save();
        return response()->json(['status change']);
    }

    public function Delete($id){
        $data=IQACActivities::find($id);
        $img_path=public_path('storage/iqacactivities/').$data->image;
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