<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AffiliationsRequest;
use App\Models\Affiliations;

class AffiliationsController extends Controller
{
    public function View(){
        $file=Affiliations::orderBy('id','desc')->get();
        return view('backend.affiliations.view',['file'=>$file]);
    }

    public function Affiliations(){
        return view('backend.affiliations.create');
    }

    public function Store(AffiliationsRequest $request){
        $data=$request->except('_token');
        $affiliations = Affiliations::insert($data);
        return redirect()->route('view.affiliations')->with('message','Data Inserted Successfully !!!');
    }

    public function Edit($id){
        $data=Affiliations::find($id);
        return view('backend.affiliations.edit',['data'=>$data]);
    }

    public function Update(Request $request,$id){
        $data1=Affiliations::find($id);
        $data=$request->except('_token');
        $data1->update($data);
        return redirect()->route('view.affiliations')->with('message','Data Update Successfully !!!');
    }

    public function Delete($id){
        $data=Affiliations::find($id);
        $data->delete();
        return redirect()->back()->with('message',"Data Deleted Successfully!!!");
    }

    public function affiliationstatus(Request $request){
        $affiliationStatus = Affiliations::find($request->affiliation_id);
        $affiliationStatus->status=$request->affiliationstatus;
        $affiliationStatus->save();
        return response()->json(['success'=>'Affiliation status change successfully.']);
    }
}