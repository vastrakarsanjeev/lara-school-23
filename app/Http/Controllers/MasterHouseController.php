<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterHouseController extends Controller
{
    public function view(){
        return view('masters.master_house');
    }
}
