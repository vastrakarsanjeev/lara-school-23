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
        ::-webkit-scrollbar{
      width: 5px;
      height: 5px;
      /*background-color:white;*/
    }

    ::-webkit-scrollbar-track{
        background-color:transparent;
    }
    ::-webkit-scrollbar-thumb{
        background-color: rgb(21, 62, 70);
            border-radius: 10px
   }
    </style>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Calculation Master</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Calculation Master Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="d_a">D.A. :</label>
                                    <input type="text" class="form-control" id="d_a" placeholder="D.A.">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="h_r_a">H.R.A :</label>
                                    <input type="text" class="form-control" id="h_r_a" placeholder="H.R.A">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="t_a">T.A. :</label>
                                    <input type="text" class="form-control" id="t_a" placeholder="T.A.">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="t_d_s">T.D.S :</label>
                                    <input type="text" class="form-control" id="t_d_s" placeholder="T.D.S">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="pf_deduction">P.F (Deduction) :</label>
                                    <input type="text" class="form-control" id="pf_deduction" placeholder="P.F (In Percent)">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="basic_gp_wd_pf">Basic+GP as per W.D. For P.F :</label>
                                    <input type="text" class="form-control" id="basic_gp_wd_pf" placeholder=" P.F">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="esi_deduction">E.S.I (Deduction) :</label>
                                    <input type="text" class="form-control" id="esi_deduction" placeholder="E.S.I">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="e_p_f">E.P.F (Pool Fund) :</label>
                                    <input type="text" class="form-control" id="e_p_f" placeholder="E.P.F (In Percent)">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="max_sal_lim_epf">Maximum Salary Limit For EPF :</label>
                                    <input type="text" class="form-control" id="max_sal_lim_epf" placeholder="E.P.F ">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="e_s_i">E.S.I (Pool Fund) :</label>
                                    <input type="text" class="form-control" id="e_s_i" placeholder="E.S.I">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salary_ded_partition">Salary Deduction Partition :</label>
                                    <input type="text" class="form-control" id="salary_ded_partition" placeholder="Salary Deduction Partition">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit Application</button>
                    </div>
                </div>
                <!-- /.card -->

                <!-- SELECT2 EXAMPLE -->
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
                    <!-- /.card-header -->
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
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
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
                <!-- /.card -->


                <!-- /.card -->


                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
@endsection
