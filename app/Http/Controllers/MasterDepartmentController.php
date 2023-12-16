<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDepartmentController extends Controller
{
    public function view(){
        return view('masters.master_department');
    }
}
