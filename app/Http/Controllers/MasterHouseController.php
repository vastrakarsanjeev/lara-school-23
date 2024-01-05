<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MasterHouse;

class MasterHouseController extends Controller
{
    public function view()
    {
        $houses = MasterHouse::orderBy('id','DESC')->get();
        return view('masters.master_house',compact('houses'));
    }
    public function save(Request $request)
    { {

            try {

                if (is_null($request->id)) {
                    $ins = new MasterHouse;
                    // return back()->with('success', "Subject created succcessfully.");
                } else {
                    $ins = MasterHouse::find($request->id);
                }
                // $ins = new MasterHouse();
                $ins->house = $request->house;
                $ins->save();
                //  return back()->with('success', "Subject created succcessfully.");
            } catch (\Exception $e) {
                return back()->with('Error', 'There is some error generated.' . $e->getMessage());
            }
            return back()->with('success', 'House Saved succesfully');
        }
    }
    public function edit(Request $request)
	{
        $houses = MasterHouse::orderBy('id','DESC')->get();
		$upd =MasterHouse::find($request->id);;

		// session()->flash('upd', $upd);
		return view('masters.master_house',compact('upd','houses'));
	}
    public function delete(Request $request)
	{
		try
		{
			if(is_null($request->id))
			{
				$qry = new MasterHouse;
			}
			else
			{
				$qry = MasterHouse::find($request->id);
			}
			$qry->delete();
		}
		catch(\Exception $e)
		{
			return back()->with('Error','There is some error generated.' .$e->getMessage());
		}

		return back()->with('Success','City Deleted succesfully' );
	}
}
