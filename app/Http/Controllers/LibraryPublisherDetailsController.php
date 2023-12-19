<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryPublisherDetailsController extends Controller
{
    public function view(){
        return view('library.publisher_details');
    }
}
