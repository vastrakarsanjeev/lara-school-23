<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterClassController extends Controller
{
    public function view(){
        return view('masters.master_class');
    }
}
