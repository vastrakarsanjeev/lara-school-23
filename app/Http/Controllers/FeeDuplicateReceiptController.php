<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeDuplicateReceiptController extends Controller
{
    public function view(){
        return view('fee.fee_duplicate_receipt');
    }
}
