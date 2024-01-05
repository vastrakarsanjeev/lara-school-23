<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MasterSectionController extends Controller
{
    public function view(){
        $classes = DB::table('master_classes')->get();
        $sections = DB::table('master_sections')->get();
        return view('masters.master_section',compact('classes','sections'));
    }

    public function save(Request $request){
        $class_id=$request->class_id;
        $class=DB::table('master_classes')->find($class_id);
        $classes = DB::table('master_classes')->get();

        $db= DB::table('master_sections');
        $data= [
            'master_class_id'     =>   $request->class_id,
            'class'     =>   $class->class,
            'type'     =>   $class->type,
            'section'   =>   $request->section,
            'limit'     => $request->limit
        ];
        if(empty($request->id)){
            $db->insert($data);
            return back()->with('success', "Subject created succcessfully.");
        }else{
            $db->where('id', $request->id)->update($data);
            return back()->with('success', "Subject Update succcessfully.");
        }
    //    return redirect()->route('master.section');
    }

    public function edit($id){
        $upd = DB::table('master_sections')->find($id);
        $classes = DB::table('master_classes')->get();
        $sections = DB::table('master_sections')->get();
        return view('masters.master_section',compact('sections','upd','classes'));
    }
}
