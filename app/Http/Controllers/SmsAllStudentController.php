<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsAllStudentController extends Controller
{
    public function view(){
        return view('sms.all_student_sms');
    }
}
