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
                        <h1>Payment History </h1>
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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="btn-group w-100">
                                  <a href="{{route('academic.cheque.payment')}}" class="btn btn-info col fileinput-button">
                                    <!--<i class="fa-solid fa-circle-check text-success"></i>-->
                                    <span>Edit Cheque Payment</span>
                                  </a>

                                  <a href="{{route('fee.payment.history')}}" class="btn btn-light col cancel">
                                    <!--<i class="fas fa-times-circle text-danger"></i>-->
                                    <span>Payment History </span>
                                  </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="mx-3 my-2">
                        <h4>Search Payment History </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 p-3 my-2 ">
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="enquiry_no">Admission No:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-table"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="enquiry_no">
                                            </div>
                                            <!-- /.input group -->
                                        </div>
                                        <!-- /.form-group -->

                                        <!-- /.form-group -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fa-solid fa-table"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="name">
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
                            <h4>Payment Details</h4>
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
                                    <th>Admission No.</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Check No./DD No.</th>
                                    <th>Check Date/DD Date</th>
                                    <th>Check Amount/DD Amount </th>
                                    <th>Payment Mode</th>
                                    <th>Remark</th>
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
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Admission No.</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Check No./DD No.</th>
                                    <th>Check Date/DD Date</th>
                                    <th>Check Amount/DD Amount </th>
                                    <th>Payment Mode</th>
                                    <th>Remark</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    {{-- <div class="card-footer row">
                            <button type="submit" class="btn btn-info m-1"><i class="fa-solid fa-print"></i> Print</button>
                            <button type="submit" class="btn btn-info m-1">Assign Roll Number</button>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
@endsection
