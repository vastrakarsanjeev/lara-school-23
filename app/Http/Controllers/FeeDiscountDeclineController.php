<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeDiscountDeclineController extends Controller
{
    public function view(){
        return view('fee.discount_decline');
    }
}
