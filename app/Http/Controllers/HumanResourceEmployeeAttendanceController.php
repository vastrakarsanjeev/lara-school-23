<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanResourceEmployeeAttendanceController extends Controller
{
    public function view(){
        return view('human-resource.employee_attendance');
    }
}
