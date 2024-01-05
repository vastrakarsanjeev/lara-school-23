<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MasterCreateSubjectController extends Controller
{
    public function view(){
        $subjects= DB::table('master_subjects')->get();
        return view('masters.master_create_subject',compact('subjects'));
    }
    public function save(Request $request){
        //return 'sanjeev';
    //     $class_id=$request->class_id;
    //     $class=DB::table('master_classes')->find($class_id);
    //     $classes = DB::table('master_classes')->get();

        $db= DB::table('master_subjects');
        $data= [
             'subject'     =>   $request->add_subject,
        ];
        if(empty($request->id)){
            $db->insert($data);
            return back()->with('success', "Subject created succcessfully.");
        }else{
            $db->where('id', $request->id)->update($data);
            return back()->with('success', "Subject updated succcessfully.");
            // return redirect()->route('master.create.subject');
        }
    }
    public function edit($id){
        $upd = DB::table('master_subjects')->find($id);
        $subjects = DB::table('master_subjects')->get();
        return view('masters.master_create_subject',compact('subjects','upd',));
    }
    public function destroy($id){
        DB::table('master_subjects')->where('id', $id)->delete();
        // return redirect()->route('master.create.subject');
        return back()->with('success', "Subject delete succcessfully.");
    }
}
