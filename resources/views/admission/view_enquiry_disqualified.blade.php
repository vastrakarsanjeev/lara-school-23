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
                                  <a href="{{route('admission.view.enquiry')}}" class="btn btn-info col fileinput-button">
                                    {{-- <i class="fa-solid fa-circle-check text-success"></i> --}}
                                    <span>Qualified Enquiries</span>
                                  </a>
                                  <a href="{{route('admission.view.enquiry.underprocess')}}" class="btn btn-info col start">
                                    {{-- <i class="fas fa-upload " style="color:rgb(219, 145, 6)" ></i> --}}
                                    <span>Underprocess Enquiries</span>
                                  </a>
                                  <a href="{{route('admission.view.enquiry.disqualified')}}" class="btn btn-light col cancel">
                                    {{-- <i class="fas fa-times-circle text-danger"></i> --}}
                                    <span>Disqualified Enquiries</span>
                                  </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="mx-3 my-1">
                        <h4>Disqualified Enquiries</h4>
                    </div>
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
                                    <th>View</th>
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
                                    <td><button class="btn btn-success">View</button></td>
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
                                    <td><button class="btn btn-success">View</button></td>
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
                                        <th>View</th>
                                        <th>Delete</th>
                                    </tr>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-danger btn-lg">Multiple Delete</button>
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
