<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionDocumentPendingController extends Controller
{
    public function view(){
        return view('admission.pending_document');
    }
}
