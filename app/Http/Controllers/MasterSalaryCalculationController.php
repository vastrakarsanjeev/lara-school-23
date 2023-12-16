<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterSalaryCalculationController extends Controller
{
    public function view(){
        return view('masters.master_salary_calculation');
    }
}
