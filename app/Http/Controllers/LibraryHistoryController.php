<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryHistoryController extends Controller
{
    public function view(){
        return view('library.history_library');
    }
}
