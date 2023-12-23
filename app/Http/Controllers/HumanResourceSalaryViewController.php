<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanResourceSalaryViewController extends Controller
{
    public function view(){
        return view('human-resource.salary_view');
    }
}
