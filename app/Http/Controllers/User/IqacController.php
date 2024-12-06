<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IQACActivities;


class IqacController extends Controller
{
    public function getLoiLetter()
    {
        $getloiletter=IQACActivities::orderBy('id','desc')->where([['status',1],['type','loi_letter']])->get();
        return view('frontend.iqac.loi_letter',compact('getloiletter'));
       
    }
    public function getSSRReport()
    {
        $getssrreport=IQACActivities::orderBy('id','desc')->where([['status',1],['type','ssr']])->get();
        return view('frontend.iqac.ssr_report',compact('getssrreport'));
       
    } 
    public function getPrtResponsereport()
    {
        $getPrtresponsereport=IQACActivities::orderBy('id','desc')->where([['status',1],['type','prt']])->get();
        return view('frontend.iqac.prt_report',compact('getPrtresponsereport'));
       
    }
    public function getSatActivities()
    {
        $getSatactivities=IQACActivities::orderBy('id','desc')->where([['status',1],['type','sat']])->get();
        return view('frontend.iqac.sat_activities',compact('getSatactivities'));
       
    }
    public function getStrategicPlan()
    {
        $getStrategicplan=IQACActivities::orderBy('id','desc')->where([['status',1],['type','strategic']])->get();
        return view('frontend.iqac.strategic_plan',compact('getStrategicplan'));
       
    }
    public function getStudyReport()
    {
        $getStudyreport=IQACActivities::orderBy('id','desc')->where([['status',1],['type','TRACER']])->get();
        return view('frontend.iqac.study_report',compact('getStudyreport'));
       
    }
    public function getMasterplan()
    {
        $getmasterplan=IQACActivities::orderBy('id','desc')->where([['status',1],['type','master_plan']])->get();
        return view('frontend.iqac.master_plan',compact('getmasterplan'));
       
    }
    public function getCampusDevelopmentPlan()
    {
        $getCampusdevelopmentplan=IQACActivities::orderBy('id','desc')->where([['status',1],['type','campus']])->get();
        return view('frontend.iqac.campus_development_plan',compact('getCampusdevelopmentplan'));
       
    }
    public function getDailyLogBook()
    {
        $getDailylogbook=IQACActivities::orderBy('id','desc')->where([['status',1],['type','daily']])->get();
        return view('frontend.iqac.daily_log_book',compact('getDailylogbook'));
       
    }

    public function getIqacDetails($id)
    {
        $getiqacDetails=IQACActivities::orderBy('id','desc')->where([['status',1]])->findOrFail($id);
        return view('frontend.iqac.iqac_details',compact('getiqacDetails')); 
    }
}
