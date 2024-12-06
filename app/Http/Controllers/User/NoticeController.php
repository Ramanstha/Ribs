<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    public function allNotice(){
        $getnotice=Notice::orderBy('id','desc')->where([['status','=','1'],['type','download']])->get();
        return view('frontend.notice.notice',compact('getnotice'));
    }
    public function noticeDownload($image)
    {
        $path = public_path('storage/notice/'.$image);
        $headers = ['Content-Type: application/pdf'];
    	$newName = 'www.ksc.edu.np-report-'.$image;

        return response()->download($path,$newName,$headers);
    }

    public function newsEvents($id)
    {
        $getNews=Notice::orderBy('id','desc')->where([['status','=','1'],['type','news']])->findOrFail($id);
        return view('frontend.notice.news',compact('getNews'));

    }
}
