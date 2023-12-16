<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionViewEnquiryController extends Controller
{
    public function view(){
        return view('admission.view_enquiry');
    }
}
