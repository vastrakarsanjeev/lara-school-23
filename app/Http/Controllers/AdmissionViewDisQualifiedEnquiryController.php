<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionViewDisQualifiedEnquiryController extends Controller
{
    public function view(){
        return view('admission.view_enquiry_disqualified');
    }
}
