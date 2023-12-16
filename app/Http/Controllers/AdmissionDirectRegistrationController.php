<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionDirectRegistrationController extends Controller
{
    public function view(){
        return view('admission.direct_registration');
    }
}
