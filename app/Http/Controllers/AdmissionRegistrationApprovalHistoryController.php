<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionRegistrationApprovalHistoryController extends Controller
{
    public function view(){
        return view('admission.registration_approval_history');
    }
}
