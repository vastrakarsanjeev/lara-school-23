<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionAwaitingController extends Controller
{
    public function view(){
        return view('admission.awaiting_admission');
    }
}
