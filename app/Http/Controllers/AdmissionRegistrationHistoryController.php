<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionRegistrationHistoryController extends Controller
{
    public function view(){
        return view('admission.registration_history');
    }
}
