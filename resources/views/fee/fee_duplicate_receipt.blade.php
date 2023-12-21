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
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Fee Detail </h1>
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
                        <h4>Search Fee Records</h4>
                    </div>
                    {{-- <div class="mx-3 my-2">
                        <h4>Search Payment History </h4>
                    </div> --}}
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 p-3 my-2 ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Class :</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Section :</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success">Search</button>
                                </div>
                            </div>
                            <div class="col-md-6  p-3 my-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="adm_no">Admission No:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-table"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="adm_no">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->

                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Session :</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success">Search</button>
                                </div>
                            </div>
                            <div class="col-md-6  p-3 my-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_date">From Date:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-table"></i></span>
                                                </div>
                                                <input type="date" class="form-control" id="form_date">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->

                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="to_date">To Date:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-table"></i></span>
                                                </div>
                                                <input type="date" class="form-control" id="to_date">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->

                                        <!-- /.form-group -->
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success">Search</button>
                                </div>
                            </div>
                            <div class="col-md-6  p-3 my-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Payment Mode :</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success">Search</button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- /.row -->
                    </div>
                    <!--<div class="card-footer">
                                    <button class="btn btn-danger btn-lg">Multiple Delete</button>
                                </div>-->
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
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <div class="mx-3 my-1">
                            <h4>Show Fee</h4>
                        </div>
                    </div>
                    <!--<div class="mx-3 my-1">
                                        <h4>Fee Pannel</h4>
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
                                    <th>Sl No.</th>
                                    <th>Name</th>
                                    <th>Invoice</th>
                                    <th>Admission No.</th>
                                    <th>Payment Mode</th>
                                    <th>Check No./DD No.</th>
                                    <th>Installment No.</th>
                                    <th>Paid current Installment Tution Fee</th>
                                    <th>Paid balance Tution Fee</th>
                                    <th>Paid Admission Fee </th>
                                    <th>Paid Admission Balance Fee </th>
                                    <th>Payment Date</th>
                                    <th>Actual Admission Fee</th>
                                    <th>Discount On Actual Admission Fee</th>
                                    <th>Final Tution Fee</th>
                                    <th>Remain Admission Fee</th>
                                    <th>Remian Tution Fee</th>
                                    <th>Receipt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                    <td>hellow</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                    <td>hellow</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                    <td>hellow</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                    <td>hellow</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Name</th>
                                    <th>Invoice</th>
                                    <th>Admission No.</th>
                                    <th>Payment Mode</th>
                                    <th>Check No./DD No.</th>
                                    <th>Installment No.</th>
                                    <th>Paid current Installment Tution Fee</th>
                                    <th>Paid balance Tution Fee</th>
                                    <th>Paid Admission Fee </th>
                                    <th>Paid Admission Balance Fee </th>
                                    <th>Payment Date</th>
                                    <th>Actual Admission Fee</th>
                                    <th>Discount On Actual Admission Fee</th>
                                    <th>Final Tution Fee</th>
                                    <th>Remain Admission Fee</th>
                                    <th>Remian Tution Fee</th>
                                    <th>Receipt</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="card-footer row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="paid_tution">Total Paid Tution Fee:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-indian-rupee-sign"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="paid_tution">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form-group -->

                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="paid_adm">Total Paid Admission Fee:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-indian-rupee-sign"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="paid_adm">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form-group -->

                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="balance_tution">Balance Tubalance_tution</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-indian-rupee-sign"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="balance_tution">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form-group -->

                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="balance_tution">Balance Admission Fee:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa-solid fa-indian-rupee-sign"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="balance_tution">
                                </div>
                                <!-- /.input group -->
                            </div>
                            <!-- /.form-group -->

                            <!-- /.form-group -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
@endsection
