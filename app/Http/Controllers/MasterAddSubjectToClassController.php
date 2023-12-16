<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterAddSubjectToClassController extends Controller
{
    public function view(){
        return view('masters.master_subject_class_assign');
    }
}
