<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryBookRecordController extends Controller
{
    public function view(){
        return view('library.book_record');
    }
}
