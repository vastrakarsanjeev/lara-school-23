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
                        <h1>Admission history </h1>
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
                                  <a href="{{route('history.admission')}}" class="btn btn-secondary col fileinput-button">
                                    <!--<i class="fa-solid fa-circle-check text-success"></i>-->
                                    <span>Admission History</span>
                                  </a>

                                  <a href="{{route('pending.document')}}" class="btn btn-light col cancel">
                                    <!--<i class="fas fa-times-circle text-danger"></i>-->
                                    <span>Pending Documents</span>
                                  </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="mx-3 my-2">
                        <h4>Search Admission History</h4>
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
                                    <button class="btn btn-info">Search</button>
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
                                    <button class="btn btn-info">Search</button>
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

        <section>
 <!-- SELECT2 EXAMPLE -->


        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
@endsection
