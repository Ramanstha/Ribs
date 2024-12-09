<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facilities;
use App\Models\Aboutus;

class ActivitiesController extends Controller
{
    public function getactivities(){
        $activities=Aboutus::orderBy('id','desc')->get();
        return view('frontend.activities.activities_list',compact('activities'));
    }

    public function getfacilities($id){
        $getfacilities=Facilities::findOrFail($id);
        if(!$getfacilities){
           abort(404);
        }
        return view('frontend.facilities.index',compact('getfacilities'));
    }

    public function getribsMessageDetails($id){
        $studentMessage=Message::findOrFail($id);
        if(!$studentMessage){
           abort(404);
        }
        return view('frontend.messages.index',compact('studentMessage'));
     }
    
}