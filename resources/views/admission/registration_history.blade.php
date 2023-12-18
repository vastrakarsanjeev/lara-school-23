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
                        <h1>View Enquiry </h1>
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
                                  <a href="{{route('registration.underprocess')}}" class="btn btn-secondary col fileinput-button">
                                    {{-- <i class="fa-solid fa-circle-check text-success"></i> --}}
                                    <span>Underprocess Registration</span>
                                  </a>
                                  <a href="{{route('registration.declined')}}" class="btn btn-light col start">
                                    {{-- <i class="fas fa-upload " style="color:rgb(219, 145, 6)" ></i> --}}
                                    <span>Declined Registrations</span>
                                  </a>
                                  <a href="{{route('registration.history')}}" class="btn btn-secondary col cancel">
                                    {{-- <i class="fas fa-times-circle text-danger"></i> --}}
                                    <span> Registration History</span>
                                  </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="mx-3 my-1">
                        <h4> Registration History</h4>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row m-auto">
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
                            </div>
                        </div>
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
                                <button class="btn btn-info">Search</button>
                            </div>
                        </div>
                        <div class="col-md-6  p-3 my-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="enquiry_no">Registration No:</label>
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
                                <button class="btn btn-info">Search</button>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>

                   <!-- <div class="card-body table-wrap">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><div class="form-group clearfix " style="margin: 0;">
                                        <div class="icheck-primary d-inline">
                                            <input type="checkbox"  id="check_all">
                                          <label for="check_all">
                                            Check All
                                          </label>
                                        </div>
                                      </div></th>
                                    <th>Sl No.</th>
                                    <th>Enq. No.</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Father name</th>
                                    <th>Contact</th>
                                    <th>Last Result</th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Camino 1.0</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td><i class="fa-solid fa-check text-success font-weight-bold " style="font-size:30px;"></i></td>
                                    <td><button class="btn btn-success">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Camino 1.0</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td><i class="fa-solid fa-check text-success font-weight-bold " style="font-size:30px;"></i></td>
                                    <td><button class="btn btn-success">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <tr>
                                        <th><div class="form-group clearfix " style="margin: 0;">
                                            <div class="icheck-primary d-inline">

                                              <label for="check_all_foot">
                                                Check All
                                              </label>
                                            </div>
                                          </div></th>
                                        <th>Sl No.</th>
                                        <th>Enq. No.</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Father name</th>
                                        <th>Contact</th>
                                        <th>Last Result</th>
                                        <th>Remark</th>
                                        <th>Status</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-danger btn-lg"> Multiple Delete</button>
                    </div>
                </div>-->
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
