<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterCreateSubjectController extends Controller
{
    public function view(){
        return view('masters.master_create_subject');
    }
}