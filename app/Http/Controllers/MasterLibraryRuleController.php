<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;
use App\Models\MasterLibraryRule;
use Illuminate\Http\Request;

class MasterLibraryRuleController extends Controller
{
    public function view(){
        $libraryrules = MasterLibraryRule::orderBy('id','DESC')->get();
        return view('masters.master_library_rule',compact('libraryrules'));
    }
    public function save(Request $request)
    {
        {

            try {

                if (is_null($request->id)) {
                    $ins = new MasterLibraryRule;
                    // return back()->with('success', "Subject created succcessfully.");
                } else {
                    $ins = MasterLibraryRule::find($request->id);
                }
                 //return print_r($ins);
                // $ins = new MasterHouse();
                $ins->no_book_without_fine = $request->one;
                $ins->book_issue_at_time = $request->two;
                $ins->let_fine = $request->three;
                $ins->no_of_day_for_let_fee = $request->four;
                $ins->save();
                //  return back()->with('success', "Subject created succcessfully.");
            } catch (\Exception $e) {
                return back()->with('Error', 'There is some error generated.' . $e->getMessage());
            }
            //return back()->with('success', 'Department Assign Saved succesfully');
            return redirect()->route('master.library.rule')->with('success', 'library Rule Assign Saved succesfully');
        }
    }
    public function edit(Request $request)
	{
        $libraryrules = MasterLibraryRule::orderBy('id','DESC')->get();
		$upd =MasterLibraryRule::find($request->id);;

		// session()->flash('upd', $upd);
		return view('masters.master_library_rule',compact('upd','libraryrules'));
	}
}
