<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SpersonalInformation;
use PDF;

class ScholarshipController extends Controller
{
    public function view(){
        $admission=SpersonalInformation::orderBy('id','desc')->get();
        return view('backend.contact.applicant',compact('admission'));
    }
    public function Delete($id){
        $data=SpersonalInformation::find($id);
        $data->delete();
        return redirect()->back()->with('message','Data Deleted Successfully');
    }

    public function ApplicationView($id){
        $getApplicantInfo=SpersonalInformation::with('Parent','EmergencyContact','AcademicInformation')->findOrFail($id);
        return view('backend.admissionpdf.admission',['getApplicantInfo'=>$getApplicantInfo]);
    }

    public function Pdf($id)
    {
        $getApplicantInfo=SpersonalInformation::with('Parent','EmergencyContact','AcademicInformation')->findOrFail($id);
        // dd($getApplicantInfo);
        $data=[
           'getApplicantInfo'=>$getApplicantInfo
        ];
        //    dd($data);
        $pdf = PDF::loadView('backend.admissionpdf.admissionpdf', $data);
        return $pdf->download($getApplicantInfo->fname . '.' . 'pdf');
    }
}
