<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionRegistrationUnderprocessController extends Controller
{
    public function view(){
        return view('admission.registration_underprocess');
    }
}
