<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Governance;


class GovernanceController extends Controller
{
    public function allGovernance($id)
    {
        $getCampusAssembly=Governance::where([['status',1],['category_id',$id]])->get();
        return view('frontend.governance.campus_assembly',compact('getCampusAssembly'));
       
    }
    public function allDownload(){
        $getdownload=Governance::orderBy('id','desc')->where([['status','=','1'],['type','download']])->get();
        return view('frontend.governance.downloadlist',compact('getdownload'));
    }
    public function Download($image)
    {
        $path = public_path('storage/governance/'.$image);
        $headers = ['Content-Type: application/pdf'];
    	$newName = 'www.ksc.edu.np-report-'.$image;

        return response()->download($path,$newName,$headers);
    }

    public function getCampusAssembly()
    {
        $getCampusAssembly=Governance::where([['status',1],['type','campus_assembly']])->get();
        return view('frontend.governance.campus_assembly',compact('getCampusAssembly'));
       
    }
    public function getCmc()
    {
        $getCmc=Governance::where([['status',1],['type','cmc']])->get();
        return view('frontend.governance.cmc',compact('getCmc'));
       
    }
     public function getHods()
    {
        $getHods=Governance::where([['status',1],['type','hods']])->get();
        return view('frontend.governance.hods',compact('getHods'));
       
    }
     public function getSubjectCommittiees()
    {
        $getSubjectcommittiees=Governance::where([['status',1],['type','subject_committees']])->get();
        return view('frontend.governance.subject_committiees',compact('getSubjectcommittiees'));
       
    }
    public function getDifferentCommittiees()
    {
        $getDifferentcommittiees=Governance::where([['status',1],['type','different_committees']])->get();
        return view('frontend.governance.different_committiees',compact('getDifferentcommittiees'));
       
    }
    public function getWorkingProcedure()
    {
        $getWorkingprocedure=Governance::where([['status',1],['type','working_procedure']])->get();
        return view('frontend.governance.working_procedure',compact('getWorkingprocedure'));
       
    }

    public function governanceDetails($id)
    {
        $getGovernancesetails=Governance::where([['status',1]])->findOrFail($id);
        return view('frontend.governance.governance_details',compact('getGovernancesetails'));
 
    }
    
}
