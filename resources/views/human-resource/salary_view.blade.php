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
                        <h1>Final Salary</h1>
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
                        <h3 class="card-title">Final Salary View</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Month :</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">Dec</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Year :</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">2023</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Employee Code :</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">All Employee</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
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
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
                <!-- /.card -->


                <!-- /.card -->


                <!-- /.card -->


                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <h3 class="card-title">Attendance Table</h3>
                    </div>
                    {{-- <div class="mx-3 my-1">
                        <h4>Create Class Section</h4>
                    </div> --}}
                    <div class="row mx-3 my-1">
                        <div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-sm-center my-1 ">
                            <span class="mx-1">Show</span><span>
                                <select class="form-control select2" style="width: ;">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                            </span><span class="mx-1">Entries</span>
                        </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-md-end justify-content-sm-center my-1">
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
                                    <th>E. Code</th>
                                    <th>Full Name</th>
                                    <th>Present Days Payble</th>
                                    <th>CL</th>
                                    <th>ML</th>
                                    <th>VL</th>
                                    <th>SL</th>
                                    <th>LWP</th>
                                    <th>Ideal Basic +G.P.</th>
                                    <th>Basic +GP as Per W.D.</th>
                                    <th>D.A</th>
                                    <th>H.R.A.</th>
                                    <th>T.A.</th>
                                    <th>O.A.</th>
                                    <th>Total Gross Salary</th>
                                    <th>EPF(12%)</th>
                                    <th>EPF Loan</th>
                                    <th>ESIC</th>
                                    <th>TDS</th>
                                    <th>SD/TDS/Pending</th>
                                    <th>Adva./Laps</th>
                                    <th>SD/EL/PMS</th>
                                    <th>Total Deduction</th>
                                    <th>Net Salary</th>
                                    <th>EPF</th>
                                    <th>ESIC(17.5% Gross)</th>
                                    <th>Toal Emp. contribution</th>
                                    <th>G. Salary</th>
                                    <th>CTC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr>
                                <tr>

                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>E. Code</th>
                                    <th>Full Name</th>
                                    <th>Present Days Payble</th>
                                    <th>CL</th>
                                    <th>ML</th>
                                    <th>VL</th>
                                    <th>SL</th>
                                    <th>LWP</th>
                                    <th>Ideal Basic +G.P.</th>
                                    <th>Basic +GP as Per W.D.</th>
                                    <th>D.A</th>
                                    <th>H.R.A.</th>
                                    <th>T.A.</th>
                                    <th>O.A.</th>
                                    <th>Total Gross Salary</th>
                                    <th>EPF(12%)</th>
                                    <th>EPF Loan</th>
                                    <th>ESIC</th>
                                    <th>TDS</th>
                                    <th>SD/TDS/Pending</th>
                                    <th>Adva./Laps</th>
                                    <th>SD/EL/PMS</th>
                                    <th>Total Deduction</th>
                                    <th>Net Salary</th>
                                    <th>EPF</th>
                                    <th>ESIC(17.5% Gross)</th>
                                    <th>Toal Emp. contribution</th>
                                    <th>G. Salary</th>
                                    <th>CTC</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="card-footer">
                        Use paginate
                    </div>
                </div>
                <!-- /.card -->


                <!-- /.card -->


                <!-- /.card -->


                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>

        <section>
 <!-- SELECT2 EXAMPLE -->


        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
@endsection
