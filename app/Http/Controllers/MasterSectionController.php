<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterSectionController extends Controller
{
    public function view(){
        return view('masters.master_section');
    }
}
