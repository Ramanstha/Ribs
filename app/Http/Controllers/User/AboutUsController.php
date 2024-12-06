<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aboutus;
use App\Models\Academic;
use App\Models\Message;
use App\Models\ProgramSubCategory;
use App\Models\Testimonial;


class AboutUsController extends Controller
{
   public function AboutUs(){
    $aboutUs=Aboutus::orderBy('id','desc')->get();
    return view('frontend.aboutus.index',compact('aboutUs'));
   }

   public function academicProgramsDetails($id){
      $programsDetails=Academic::findOrFail($id);
      if(!$programsDetails){
         abort(404);
      }
      return view('frontend.academic.academic_details',compact('programsDetails'));

   }

   public function getribsMessageDetails($id){
      $studentMessage=Testimonial::findOrFail($id);
      if(!$studentMessage){
         abort(404);
      }
      return view('frontend.messages.index',compact('studentMessage'));
   }
}
