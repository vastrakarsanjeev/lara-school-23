<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperDashbordController extends Controller
{
    public function view(){
        return view('dashboard');
    }
}
