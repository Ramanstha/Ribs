<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rmc;


class RmcController extends Controller
{
    public function getFieldTrip()
    {
        $getfieldTrip=Rmc::orderBy('id','desc')->where([['status',1],['type','field_trip']])->get();
        return view('frontend.rmc.field_trip',compact('getfieldTrip'));
       
    }
    public function getResearch()
    {
        $getresearch=Rmc::orderBy('id','desc')->where([['status',1],['type','research']])->get();
        return view('frontend.rmc.research',compact('getresearch'));
       
    }
    public function getSeminars()
    {
        $getseminar=Rmc::orderBy('id','desc')->where([['status',1],['type','seminar']])->get();
        return view('frontend.rmc.seminar',compact('getseminar'));
       
    }
    public function getWorkshops()
    {
        $getworkshop=Rmc::orderBy('id','desc')->where([['status',1],['type','workshop']])->get();
        return view('frontend.rmc.workshop',compact('getworkshop'));
       
    }
    public function getTraining()
    {
        $gettraining=Rmc::orderBy('id','desc')->where([['status',1],['type','tranning']])->get();
        return view('frontend.rmc.training',compact('gettraining'));
       
    }

    public function getRmcDetails($id)
    {
        $getrmcDetails=Rmc::orderBy('id','desc')->where([['status',1]])->findOrFail($id);
        return view('frontend.rmc.rmc_details',compact('getrmcDetails')); 
    }
}
