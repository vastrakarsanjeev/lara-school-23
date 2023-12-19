<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsAccountSectionController extends Controller
{
    public function view(){
        return view('sms.account_section_sms');
    }
}
