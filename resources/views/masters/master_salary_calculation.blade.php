@extends('layout')
@section('title')
    Brilliant Public School
@endsection
@section('style')
    <style>
        .card-header {
            background-color: transparent;
            border-bottom: 4px solid rgba(42, 110, 236, 0.3);
            padding: 0.75rem 1.25rem;
            position: relative;
            border-top-left-radius: 0.25rem;
            border-top-right-radius: 0.25rem;
        }

        .table-wrap {
            max-height: 500px;
            overflow: scroll;
        }

        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
            /*background-color:white;*/
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgb(21, 62, 70);
            border-radius: 10px
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <i class="fa-solid fa-xmark btn-close"></i>
                            </div>
                        @else
                            <h1 class="text-danger">{{ session('error') }}</h1>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <h1>Calculation Master</h1>
                    </div>

                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Calculation Master Form</h3>
                    </div>
                    <form action="{{ route('master.salary.calculation.save') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ isset($upd) ? $upd->id : '' }}">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="d_a">D.A. :</label>
                                        <input type="text" class="form-control" id="d_a" placeholder="D.A."
                                            name="da" value="{{ old('da', isset($upd)?$upd->da:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="h_r_a">H.R.A :</label>
                                        <input type="text" class="form-control" id="h_r_a" placeholder="H.R.A"
                                            name="hra" value="{{ old('hra', isset($upd)?$upd->hra:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="t_a">T.A. :</label>
                                        <input type="text" class="form-control" id="t_a" placeholder="T.A."
                                            name="ta" value="{{ old('ta', isset($upd)?$upd->ta:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="t_d_s">T.D.S :</label>
                                        <input type="text" class="form-control" id="t_d_s" placeholder="T.D.S"
                                            name="tds" value="{{ old('tds', isset($upd)?$upd->tds:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pf_deduction">P.F (Deduction) :</label>
                                        <input type="text" class="form-control" id="pf_deduction"
                                            placeholder="P.F (In Percent)" name="pfdeduction" value="{{ old('pfdeduction', isset($upd)?$upd->pf:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="basic_gp_wd_pf">Basic+GP as per W.D. For P.F :</label>
                                        <input type="text" class="form-control" id="basic_gp_wd_pf" placeholder=" P.F"
                                            name="basicgpwdpf" value="{{ old('basicgpwdpf', isset($upd)?$upd->basic_gp_pf:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="esi_deduction">E.S.I (Deduction) :</label>
                                        <input type="text" class="form-control" id="esi_deduction" placeholder="E.S.I"
                                            name="esideduction" value="{{ old('esideduction', isset($upd)?$upd->esi:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e_p_f">E.P.F (Pool Fund) :</label>
                                        <input type="text" class="form-control" id="e_p_f"
                                            placeholder="E.P.F (In Percent)" name="epf" value="{{ old('epf', isset($upd)?$upd->epf_pool_fund:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="max_sal_lim_epf">Maximum Salary Limit For EPF :</label>
                                        <input type="text" class="form-control" id="max_sal_lim_epf" placeholder="E.P.F "
                                            name="maxsallimepf" value="{{ old('maxsallimepf', isset($upd)?$upd->max_epf:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="e_s_i">E.S.I (Pool Fund) :</label>
                                        <input type="text" class="form-control" id="e_s_i" placeholder="E.S.I"
                                            name="esi" value="{{ old('esi', isset($upd)?$upd->esi_pool_fund:'') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="salary_ded_partition">Salary Deduction Partition :</label>
                                        <input type="text" class="form-control" id="salary_ded_partition"
                                            placeholder="Salary Deduction Partition" name="salarydadpartition" value="{{ old('salarydadpartition', isset($upd)?$upd->salary_partition:'') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">{{isset($upd)?'Update':'Submit'}}</button>
                        </div>
                    </form>
                </div>
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Calculation Master List</h3>
                    </div>
                    <div class="row mx-3 my-1">
                        <div
                            class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-sm-center my-1 ">
                            <span class="mx-1">Show</span><span>
                                <select class="form-control select2" style="width: ;">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </span><span class="mx-1">Entries</span>
                        </div>
                        <div
                            class="col-md-6 d-flex align-items-center justify-content-md-end justify-content-sm-center my-1">
                            <span class="mx-1">Search :</span>
                            <span>
                                <input type="text" class="form-control" id="exampleInputEmail1">
                            </span>
                        </div>
                    </div>
                    <div class="card-body table-wrap">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>D.A</th>
                                    <th>H.R.A</th>
                                    <th>T.A</th>
                                    <th>TDS</th>
                                    <th>PF</th>
                                    <th>Basic+GP as per W.D. For P.F</th>
                                    <th>ESI</th>
                                    <th>EPF</th>
                                    <th>Maximum Salary Limit For EPF</th>
                                    <th>ESI</th>
                                    <th>Salary Deduction Partition</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($salarycals as $salarycal)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $salarycal->da }}</td>
                                        <td>{{ $salarycal->hra }}</td>
                                        <td>{{ $salarycal->ta }}</td>
                                        <td>{{ $salarycal->tds }}</td>
                                        <td>{{ $salarycal->pf }}</td>
                                        <td>{{ $salarycal->basic_gp_pf }}</td>
                                        <td>{{ $salarycal->esi }}</td>
                                        <td>{{ $salarycal->esi_pool_fund }}</td>
                                        <td>{{ $salarycal->epf_pool_fund }}</td>
                                        <td>{{ $salarycal->max_epf }}</td>
                                        <td>{{ $salarycal->salary_partition }}</td>
                                        <td><a href="{{ route('master.salary.calculation.edit', $salarycal->id) }}"
                                            class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>D.A</th>
                                    <th>H.R.A</th>
                                    <th>T.A</th>
                                    <th>TDS</th>
                                    <th>PF</th>
                                    <th>Basic+GP as per W.D. For P.F</th>
                                    <th>ESI</th>
                                    <th>EPF</th>
                                    <th>Maximum Salary Limit For EPF</th>
                                    <th>ESI</th>
                                    <th>Salary Deduction Partition</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Use paginate
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
@endsection
