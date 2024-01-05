<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterLeave;
class MasterLiveController extends Controller
{
    public function view(){
        return view('masters.master_leave');
    }
    public function save(Request $request)
    { {

            try {

                if (is_null($request->id)) {
                    $ins = new MasterLeave;
                    // return back()->with('success', "Subject created succcessfully.");
                } else {
                    $ins = MasterLeave::find($request->id);
                }
                // $ins = new MasterHouse();
                $ins->cl = $request->cl;
                $ins->ml = $request->ml;
                $ins->vl = $request->vl;
                $ins->sl = $request->sl;
                $ins->save();
                //  return back()->with('success', "Subject created succcessfully.");
            } catch (\Exception $e) {
                return back()->with('Error', 'There is some error generated.' . $e->getMessage());
            }
            return back()->with('success', 'Leave Saved succesfully');
        }
    }
}
