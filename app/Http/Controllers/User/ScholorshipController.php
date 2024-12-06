<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ScholarshipRequest;
use App\Models\Seca;
use App\Models\Seducation;
use App\Models\Sgeneral;
use App\Models\SparentInformation;
use App\Models\SpersonalInformation;
use App\Models\Sterminal;
use App\Models\Academic;
use Illuminate\Http\Request;

class ScholorshipController extends Controller
{
    public function Schoolarship(){
        $getProgram=Academic::orderBy('id','desc')->get();
        return view('frontend.online_form.schoolarship',compact('getProgram'));
    }
    
    public function StoreSchoolarship(ScholarshipRequest $request){
       
        $storeinformation = SpersonalInformation::create([
            'sfield' => $request->sfield,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'cell' => $request->cell,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'municipality' => $request->municipality,
            'attachment' => $request->attachment,
            
            // $storeinformation => $request->except('_token','attachment'),

            // if ($request->file('attachment')){
            //     $filename1 = $request->file('attachment');
            //     $file1 = time() . $request->title . 'attachment' . '.' . $filename1->getClientOriginalExtension();
            //     $destination = public_path('storage/scholarship/');
            //     $filename1->move($destination, $file1);
            //     $data['attachment']=$file1;
            //     }
        ]);
        $storeinformation = SparentInformation::create([
            'spersonalinformation_id' => $storeinformation->id,
            'fathername' => $request->fathername,
            'foccupation' => $request->foccupation,
            'faddress' => $request->faddress,
            'fcell' => $request->fcell,
            'mothername' => $request->mothername,
            'moccupation' => $request->moccupation,
            'maddress' => $request->maddress,
            'fcell' => $request->fcell,
        ]);
        $storeinformation = Seducation::create([
            'spersonalinformation_id' => $storeinformation->id,
            'school' => $request->school,
            'level' => $request->level,
        ]);
        $storeinformation = Seca::create([
            'spersonalinformation_id' =>  $storeinformation->id,
            'eca' => $request->eca,
        ]);
        $storeinformation = Sterminal::create([
            'spersonalinformation_id' =>  $storeinformation->id,
            'rank' => $request->rank,
            'result' => $request->result,
        ]);
        if ($storeinformation) {
            $notification = array(
                'message' => 'Your Scholarship Form Submitted successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}