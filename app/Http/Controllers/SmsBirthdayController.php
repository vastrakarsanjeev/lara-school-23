<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsBirthdayController extends Controller
{
    public function view(){
        return view('sms.birthday_sms');
    }
}
