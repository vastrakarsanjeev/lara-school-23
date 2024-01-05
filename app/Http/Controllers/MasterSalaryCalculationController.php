<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MasterSalaryCal;
class MasterSalaryCalculationController extends Controller
{
    public function view(){
        $salarycals = MasterSalaryCal::orderBy('id','DESC')->get();
        return view('masters.master_salary_calculation',compact('salarycals'));
    }
    public function save(Request $request)
    {
        {
            DB::beginTransaction();
            try {

                if (is_null($request->id)) {
                    $ins = new MasterSalaryCal;
                    // return back()->with('success', "Subject created succcessfully.");
                } else {
                    $ins = MasterSalaryCal::find($request->id);
                }
                // $ins = new MasterHouse();
                $ins->da = $request->da;
                $ins->hra =$request->hra;
                $ins->ta = $request->ta;
                $ins->tds = $request->tds;
                $ins->pf = $request->pfdeduction;
                $ins->basic_gp_pf = $request->basicgpwdpf;
                $ins->esi = $request->esideduction;
                $ins->esi_pool_fund = $request->esi;
                $ins->epf_pool_fund = $request->epf;
                $ins->max_epf = $request->maxsallimepf;
                $ins->salary_partition = $request->salarydadpartition;
                $ins->save();
                DB::commit();
                //  return back()->with('success', "Subject created succcessfully.");
            } catch (\Exception $e) {
                DB::rollBack();
                return back()->with('Error', 'There is some error generated.' . $e->getMessage());
            }
            return redirect()->route('master.salary.calculation')->with('success', 'Data Saved succesfully');
        }
    }
    public function edit(Request $request)
	{
		$upd =MasterSalaryCal::find($request->id);;
		// session()->flash('upd', $upd);
		$salarycals = MasterSalaryCal::orderBy('id','DESC')->get();
        return view('masters.master_salary_calculation',compact('salarycals','upd'));
	}
}
