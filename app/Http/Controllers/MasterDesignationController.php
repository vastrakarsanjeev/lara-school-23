<?php

namespace App\Http\Controllers;
use App\Models\MasterDesignation;
use App\Models\MasterDepartment;
use Illuminate\Http\Request;

class MasterDesignationController extends Controller
{

    public function view(){
        $designations= MasterDesignation::orderBy('id','DESC')->get();
        $departments= MasterDepartment::orderBy('id','DESC')->get();
        return view('masters.master_designation',compact('designations','departments'));
    }
    public function save(Request $request)
    {
        {

            try {

                if (is_null($request->id)) {
                    $ins = new MasterDesignation;
                    // return back()->with('success', "Subject created succcessfully.");
                } else {
                    $ins = MasterDesignation::find($request->id);
                }
                // $ins = new MasterHouse();
                $ins->master_department_id = $request->department_id;
                $ins->designation_name = $request->design;
                $ins->save();
                //  return back()->with('success', "Subject created succcessfully.");
            } catch (\Exception $e) {
                return back()->with('Error', 'There is some error generated.' . $e->getMessage());
            }
            //return back()->with('success', 'Department Assign Saved succesfully');
            return redirect()->route('master.designation')->with('success', 'Designation Assign Saved succesfully');
        }
    }
    public function edit(Request $request)
	{
        $departments= MasterDepartment::orderBy('id','DESC')->get();
        $designations = MasterDesignation::orderBy('id','DESC')->get();
		$upd =MasterDesignation::find($request->id);;

		// session()->flash('upd', $upd);
		return view('masters.master_designation',compact('upd','designations','departments'));
	}
    public function delete(Request $request)
	{
		try
		{
			if(is_null($request->id))
			{
				$qry = new MasterDesignation;
			}
			else
			{
				$qry = MasterDesignation::find($request->id);
			}
			$qry->delete();
		}
		catch(\Exception $e)
		{
			return back()->with('Error','There is some error generated.' .$e->getMessage());
		}

		return redirect()->route('master.designation')->with('success', 'Designation Assign Deleted succesfully');
	}
}
