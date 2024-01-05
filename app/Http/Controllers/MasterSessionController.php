<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterSession;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class MasterSessionController extends Controller
{
    public function view(){
        $sessions = DB::table('master_sessions')->get();
        return view('masters.master_session',compact('sessions'));
    }
    public function save(Request $request)
    {
         $this->validate($request,[
           'year' => 'required',
         ]);
        $sessions = new MasterSession();
        $sessions->year = $request->year;
        // $user->lname = $request->lname;
        // $user->email = $request->email;
        $sessions->save();
        // Toastr::success('User Successfully Saved','Success');
        return redirect()->route('master.session');
}
public function update(Request $req, $id){
    DB::table('master_sessions')->update(['status' => 0]);
    $update = DB::table('master_sessions')
              ->where('id', $id)
              ->update(['status' => 1]);
              session()->flash('upd', 'create');
              return redirect()->route('master.session');
}
}
