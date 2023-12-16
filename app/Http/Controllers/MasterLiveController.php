<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterLiveController extends Controller
{
    public function view(){
        return view('masters.master_leave');
    }
}
