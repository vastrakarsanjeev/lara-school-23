<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivilegeController extends Controller
{
    public function view(){
        return view('privilege.show_privilege');
    }
}
