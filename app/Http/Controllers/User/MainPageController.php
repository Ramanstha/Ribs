<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Academic;
use App\Models\Banner;
use App\Models\Message;
use App\Models\ProgramCategory;
use App\Models\Notice;
use App\Models\Video;
use App\Models\Testimonial;
use App\Models\Galleryfeestructure;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function MainPage(){
        $getaboutus=Aboutus::orderBy('id','desc')->first();
        $getbanner=Banner::orderBy('id','desc')->get();
        $getacademic=Academic::orderBy('order','asc')->get();
        $getvideo=Video::orderBy('id','desc')->where('status','=','1')->first();
        $getnotice=Notice::orderBy('id','desc')->where([['status','=','1'],['type','notice']])->paginate(5);
        $getnews=Notice::orderBy('id','desc')->where([['status','=','1'],['type','news']])->paginate(5);
        $getmessage=Message::orderBy('id','desc')->where([['type','chairperson']])->first();
        $getteachermessage=Message::orderBy('id','desc')->where([['type','teacher']])->first();
        $getstudentmessage=Message::orderBy('id','desc')->where([['type','student']])->get();
        $getmasterprogram=ProgramCategory::with('category')->orderBy('id','desc')->where([['title','masters']])->get();
        $getbechlorprogram=ProgramCategory::with('category')->orderBy('id','desc')->where([['title','bachelor']])->get();
        $getnonacademicprogram=ProgramCategory::with('category')->orderBy('id','desc')->where([['title','non-academic']])->get();
        $getprogram=ProgramCategory::with('category')->orderBy('id','desc')->where([['title','+2']])->get();
        $getgallery=Galleryfeestructure::orderBy('id','desc')->where([['type','gallery']])->get();
        $gettestimonial=Testimonial::orderBy('id','desc')->get();
        return view('frontend.index',compact('gettestimonial','getaboutus','getacademic','getbanner','getvideo','getnotice','getnews','getmessage','getteachermessage','getstudentmessage','getmasterprogram','getbechlorprogram','getprogram','getgallery','getnonacademicprogram'));
    }
    
    public function download($image){
    // $data = Publication::find($title);
    $path = public_path('storage/notice/'.$image);
    return Response::download($path);
}


}