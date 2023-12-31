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
            background-color: rgb(21, 62, 70, 0.5);
            border-radius: 10px
        }

        .card-success:not(.card-outline)>.card-header {
            background-color: #2f5564;
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
                        <h1>Employee Salary View </h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <h3 class="card-title">Employee Salary List</h3>
                    </div>
                    <!-- <div class="mx-3 my-1">
                            <h4>Create Class Section</h4>
                        </div>-->
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
                                    <th>Employee Code</th>
                                    <th>Employee Name</th>
                                    <th>D.A.</th>
                                    <th>H.R.A</th>
                                    <th>T.A</th>
                                    <th>TDS</th>
                                    <th>P.F.</th>
                                    <th>Minimum Salary For P.F</th>
                                    <th>ESI</th>
                                    <th>EPF</th>
                                    <th>Minimum Employee EPF</th>
                                    <th>ESI 4.75</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Camino 1.0</td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Camino 1.5</td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                    <td><button class="btn btn-success">active</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Employee Code</th>
                                    <th>Employee Name</th>
                                    <th>D.A.</th>
                                    <th>H.R.A</th>
                                    <th>T.A</th>
                                    <th>TDS</th>
                                    <th>P.F.</th>
                                    <th>Minimum Salary For P.F</th>
                                    <th>ESI</th>
                                    <th>EPF</th>
                                    <th>Minimum Employee EPF</th>
                                    <th>ESI 4.75</th>
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
