<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RmcRequest;
use App\Models\Rmc;
use File;

class RmcController extends Controller
{
    public function View(){
        $data=Rmc::orderBy('id','desc')->get();
        return view('backend.rmc.view',['data'=>$data]);
    }

    public function RmcActivities(){
        return view('backend.rmc.create');
    }

    public function Store(RmcRequest $request){
        $data=$request->except('_token','image');
        $filename = $request->file('image');
        $file = time() . '-' . 'image' . '.' . $filename->getClientOriginalExtension();
        $destination = public_path('storage/rmc/');
        $filename->move($destination, $file);
        $data['image']=$file;

        $data =Rmc::insert($data);
        return redirect()->route('view.rmc')->with('message','Data Inserted Successfully !!!');
    }
    public function Edit($id){
        $data=Rmc::find($id);
        return view('backend.rmc.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data1=Rmc::find($id);
        $data = $request->except('_token','image');
        if ($request->file('image')){
            File::delete(public_path('storage/rmc/'.$data1->image));
            $filename = $request->file('image');
            $file = time() . '-' . 'image' . '.' . $filename->getClientOriginalExtension();
            $destination=public_path('storage/rmc/');
            $filename->move($destination,$file);
            $data['image']=$file;
        }

        $data1->update($data);
        return redirect()->route('view.rmc')->with('message','Data Update Successfully !!!');
    }

    public function Rmcstatus(Request $request){
        $rmc = Rmc::find($request->rmc_id);
        $rmc->status=$request->rmcstatus;
        $rmc->save();
        return response()->json(['status change']);
    }

    public function Delete($id){
        $data=Rmc::find($id);
        $img_path=public_path('storage/rmc/').$data->image;
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
