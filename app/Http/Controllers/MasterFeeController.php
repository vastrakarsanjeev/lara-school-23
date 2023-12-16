<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterFeeController extends Controller
{
    public function view(){
        return view('masters.master_fee');
    }
}
