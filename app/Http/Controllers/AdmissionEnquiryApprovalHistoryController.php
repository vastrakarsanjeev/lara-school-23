<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionEnquiryApprovalHistoryController extends Controller
{
    public function view(){
        return view('admission.enquiry_approval_history');
    }
}
