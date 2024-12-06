<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddmissiomRequest;
use App\Models\AcademicInformation;
use App\Models\EmergencyContact;
use App\Models\ParentInformation;
use App\Models\PersonalInformation;
use App\Models\Academic;
use Illuminate\Http\Request;

class AddmissionController extends Controller
{
    public function Admission(){
        $getProgram=Academic::orderBy('id','desc')->get();
        return view('frontend.online_form.form',compact('getProgram'));
    }
    public function selectSubject(Request $request)
    {
        $parent_id = $request->cat_id;  
        $allsubject = Academic::where('type',$parent_id)->get();
        return response()->json([
            'allsubject' => $allsubject
        ]);
    }
    public function StoreForm(AddmissiomRequest $request){
       
        $storeinformation = PersonalInformation::create([
            'level' => $request->level,
            'subject' => $request->subject,
            'fname' => $request->fname,
            'mname' => $request->mname,
            'lname' => $request->lname,
            'dobad' => $request->dobad,
            'dobbs' => $request->dobbs,
            'gender' => $request->gender,
            'religion' => $request->religion,
            'pcountry' => $request->pcountry,
            'pprovince' => $request->pprovince,
            'pdistrict' => $request->pdistrict,
            'pmunciplicity' => $request->pmunciplicity,
            'pward' => $request->pward,
            'pemail' => $request->pemail,
            'pphone' => $request->pphone,
            'ccountry' => $request->pcountry,
            'cprovince' => $request->pprovince,
            'cdistrict' => $request->pdistrict,
            'cmunciplicity' => $request->pmunciplicity,
            'cward' => $request->pward,
            'cemail' => $request->cemail,
            'cphone' => $request->cphone,     
        ]);
        $storeinformation = ParentInformation::create([
            'personalinformation_id' => $storeinformation->id,
            'fathername' => $request->fathername,
            'femail' => $request->femail,
            'fprofession' => $request->fprofession,
            'fphone' => $request->fphone,
            'mothername' => $request->mothername,
            'memail' => $request->memail,
            'mprofession' => $request->mprofession,
            'mphone' => $request->mphone,
        ]);
        $storeinformation = EmergencyContact::create([
            'personalinformation_id' => $storeinformation->id,
            'name' => $request->name,
            'relationship' => $request->relationship,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        $storeinformation = AcademicInformation::create([
            'personalinformation_id' =>  $storeinformation->id,
            'alevel' => $request->alevel,
            'university' => $request->university,
            'passedyear' => $request->passedyear,
            'symbol' => $request->symbol,
            'division' => $request->division,
            'faculty' => $request->faculty,
        ]);
        if ($storeinformation) {
            $notification = array(
                'message' => 'Your Admission Form Submitted successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
