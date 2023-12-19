<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryFineController extends Controller
{
    public function view(){
        return view('library.paid_fine');
    }
}
