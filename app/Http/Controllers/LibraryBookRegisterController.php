<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryBookRegisterController extends Controller
{
    public function view(){
        return view('library.book_register');
    }
}
