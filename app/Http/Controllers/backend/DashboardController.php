<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('backend.index');
    }

}
