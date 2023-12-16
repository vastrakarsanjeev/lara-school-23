<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterSessionController extends Controller
{
    public function view(){
        return view('masters.master_session');
    }
}
