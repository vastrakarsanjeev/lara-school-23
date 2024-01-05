<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Test;
class TestController extends Controller
{
    public function index(){
        // DB::table('tests')->update([
        //     'id'=>11
        // ]);
        $ins= new Test;
        $ins->id= 20;
        $ins->save();

    }
}
