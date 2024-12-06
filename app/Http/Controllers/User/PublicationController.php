<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function allPublication($id){
        $getpublication=Publication::where([['status',1],['id',$id]])->get();
        return view('frontend.publication.publication',compact('getpublication'));
       
    }

    public function publicationDetails($id){
        $getpublicationdetails=Publication::findOrFail($id);
        return view('frontend.publication.publicationdetail',compact('getpublicationdetails'));
 
    }
}
