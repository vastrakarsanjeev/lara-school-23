<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeDiscountApprovalController extends Controller
{
    public function view(){
        return view('fee.discount_approval');
    }
}
