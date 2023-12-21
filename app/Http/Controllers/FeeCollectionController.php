<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeeCollectionController extends Controller
{
    public function view(){
        return view('fee.pay_fee_list');
    }
}
