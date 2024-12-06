<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInformation;
use PDF;

class AdmissionController extends Controller
{
    public function view(){
        $admission=PersonalInformation::orderBy('id','desc')->get();
        return view('backend.contact.applicant',compact('admission'));
    }
    public function Delete($id){
        $data=PersonalInformation::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }

    public function ApplicationView($id){
        $getApplicantInfo=PersonalInformation::with('Parent','EmergencyContact','AcademicInformation')->findOrFail($id);
        return view('backend.admissionpdf.admission',['getApplicantInfo'=>$getApplicantInfo]);
    }

    public function Pdf($id)
    {
        $getApplicantInfo=PersonalInformation::with('Parent','EmergencyContact','AcademicInformation')->findOrFail($id);
        // dd($getApplicantInfo);
        $data=[
           'getApplicantInfo'=>$getApplicantInfo
        ];
        //    dd($data);
        $pdf = PDF::loadView('backend.admissionpdf.admissionpdf', $data);
        return $pdf->download($getApplicantInfo->fname . '.' . 'pdf');
    }

}