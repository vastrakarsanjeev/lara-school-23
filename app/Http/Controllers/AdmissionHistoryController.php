<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionHistoryController extends Controller
{
    public function view(){
        return view('admission.history_admission');
    }
}
