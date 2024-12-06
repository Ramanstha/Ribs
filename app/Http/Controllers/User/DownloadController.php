<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class DownloadController extends Controller
{
    public function Download(){
        $getnotice=Notice::orderBy('id','desc')->get();
        return view('frontend.content.download',compact('getnotice'));
    }
}
