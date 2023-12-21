<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeDiscountHistoryController extends Controller
{
    public function view(){
        return view('fee.discount_history');
    }
}
