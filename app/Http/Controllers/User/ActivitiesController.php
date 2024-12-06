<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;

class ActivitiesController extends Controller
{
    public function AboutUs(){
        $activities=Aboutus::orderBy('id','desc')->get();
        return view('frontend.activities.activities_list',compact('activities'));
       }
    
}
