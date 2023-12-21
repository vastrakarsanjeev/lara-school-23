<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeePaymentHistoryController extends Controller
{
    public function view(){
        return view('fee.fee_payment_history');
    }
}
