<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MasterClassController extends Controller
{
    public function view(){
        $classes = DB::table('master_classes')->get();
        return view('masters.master_class',compact('classes'));
    }

    public function edit($id){
        $classfind = DB::table('master_classes')->find($id);
$classes = DB::table('master_classes')->get();
        return view('masters.master_class',compact('classes','classfind'));
    }
    public function update(Request $req, $id){
        // DB::table('master_sessions')->update(['status' => 0]);
        $update = DB::table('master_classes')
                  ->where('id', $id)
                  ->update(['class' => $req->class_name,
                ]);
                //   session()->flash('upd', 'create');
                //   return redirect()->route('master.class');
                  return back()->with('success', "Subject updated succcessfully.");
    }
}
