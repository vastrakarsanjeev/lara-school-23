<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeTransportChequeController extends Controller
{
    public function view(){
        return view('fee.transport_cheque_payment');
    }
}
