<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeAcademicChequeController extends Controller
{
    public function view(){
        return view('fee.academic_cheque_payment');
    }
}
