<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galleryfeestructure;

class FeeStructureController extends Controller
{
    // public function FeeStruture(){
    //     $getfeestructure=Galleryfeestructure::orderBy('id','desc')->where([['type','fee_structure']])->first();
    //     return view('frontend.feestructure.index',compact('getfeestructure'));
    // }

    public function Gallery(){
        $gallery=Galleryfeestructure::orderBy('id','desc')->get();
        return view('frontend.gallery.index',compact('gallery'));
    }
    // public function Scholorship(){
    //     $scholorship=Galleryfeestructure::orderBy('id','desc')->where([['type','scholorship']])->first();
    //     return view('frontend.scholorship.index',compact('scholorship'));
    // }
}