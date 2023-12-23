<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveLogController extends Controller
{
    public function view(){
        return view('active-log.active_log');
    }
}
