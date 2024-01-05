<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\MasterDepartment;
use App\Models\MasterDesignation;
use Illuminate\Http\Request;


class MasterDepartmentController extends Controller
{
    public function view(){
        $departments = MasterDepartment::orderBy('id','DESC')->get();
        return view('masters.master_department',compact('departments'));
    }

    public function save(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        // ]);
        {
            try {

                if (is_null($request->id)) {
                    $ins = new MasterDepartment;
                    // return back()->with('success', "Subject created succcessfully.");
                } else {
                    $ins = MasterDepartment::find($request->id);
                }
                // $ins = new MasterHouse();
                $ins->department_name = $request->depart_name;
                $ins->save();
                //  return back()->with('success', "Subject created succcessfully.");
            } catch (\Exception $e) {
                return back()->with('Error', 'There is some error generated.' . $e->getMessage());
            }
            //return back()->with('success', 'Department Assign Saved succesfully');
            return redirect()->route('master.department')->with('success', 'Department Assign Saved succesfully');
        }
    }
    public function edit(Request $request)
	{
        $departments = MasterDepartment::orderBy('id','DESC')->get();
		$upd =MasterDepartment::find($request->id);;

		// session()->flash('upd', $upd);
		return view('masters.master_department',compact('upd','departments'));
	}
    public function delete(Request $request)
	{
        DB::beginTransaction();
		try
		{
			if(is_null($request->id))
			{
				$qry = new MasterDepartment;
			}
			else
			{
                $g=$request->id;

				$qry = MasterDepartment::find($request->id);
                $vn = MasterDesignation::where('master_department_id', $g);
			}
			$qry->delete();
             $vn->delete();

             DB::commit();
		}
		catch(\Exception $e)
		{
            DB::rollBack();
			return back()->with('Error','There is some error generated.' .$e->getMessage());
		}

		return redirect()->route('master.department')->with('success', 'Department Assign Deleted succesfully');
	}
}
