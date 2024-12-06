<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function allresource($id){
        $getresource=Resource::where([['status',1],['id',$id]])->get();
        return view('frontend.resource.resource',compact('getresource'));
       
    }

    public function resourceDetails($id){
        $getresourcedetails=Resource::findOrFail($id);
        return view('frontend.resource.resourcedetail',compact('getresourcedetails'));
 
    }
}
