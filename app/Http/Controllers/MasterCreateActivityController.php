<?php

namespace App\Http\Controllers;

use App\Models\CreateActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterCreateActivityController extends Controller
{
    public function view(){
        $activities = CreateActivity::orderBy('id','DESC')->get();
        return view('masters.master_create_activity',compact('activities'));
    }
    public function save(Request $request)
    {
        {

            try {

                if (is_null($request->id)) {
                    $ins = new CreateActivity;
                    // return back()->with('success', "Subject created succcessfully.");
                } else {
                    $ins = CreateActivity::find($request->id);
                }
                 //return print_r($ins);
                // $ins = new MasterHouse();
                $ins->activity = $request->activity;
                $ins->save();
                //  return back()->with('success', "Subject created succcessfully.");
            } catch (\Exception $e) {
                return back()->with('Error', 'There is some error generated.' . $e->getMessage());
            }
            //return back()->with('success', 'Department Assign Saved succesfully');
            return redirect()->route('master.create_activity')->with('success', 'Data Saved succesfully');
        }
    }
    public function edit(Request $request)
	{
        $activities = CreateActivity::orderBy('id','DESC')->get();
		$upd =CreateActivity::find($request->id);;

		// session()->flash('upd', $upd);
		return view('masters.master_create_activity',compact('upd','activities'));
	}
    public function delete(Request $request)
	{
        DB::beginTransaction();
		try
		{
			if(is_null($request->id))
			{
				$qry = new CreateActivity;
			}
			else
			{
				$qry = CreateActivity::find($request->id);
			}
			$qry->delete();
             DB::commit();
		}
		catch(\Exception $e)
		{
            DB::rollBack();
			return back()->with('Error','There is some error generated.' .$e->getMessage());
		}

		return redirect()->route('master.create_activity')->with('success', 'Data Deleted succesfully');
	}
}
