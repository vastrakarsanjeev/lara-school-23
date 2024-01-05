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
            height: 40vh;
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
   #next_table{
    display: none;
   }
   #prev_table{
    position: absolute;
    top: 0;
    left: 0;
   }
   #next_table{
    position: absolute;
    top: 0;
    left: 0;
   }
   .block{
position: relative;
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
                        <h1>Enquiry Approval </h1>
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
                                  <a href="{{route('admission.enquiry.approval.details')}}" class="btn btn-light col fileinput-button">
                                    <!--<i class="fa-solid fa-circle-check text-success"></i>-->
                                    <span>Enquiry Approval & Details Section</span>
                                  </a>
                                  <a href="{{route('admission.enquiry.approval.history')}}" class="btn btn-info col cancel">
                                    <!--<i class="fas fa-times-circle text-danger"></i>-->
                                    <span>Enquiry Approval HIstory</span>
                                  </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <div class="mx-3 my-2">
                        <button class="btn btn-outline-info m-1 prev">Prev Column</button>
                        <button class="btn btn-outline-info m-1 next">Next Column</button>
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

                    <div class="card-body table-wrap row block">
                        <table id="prev_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Enquiry No.</th>
                                    <th>Enquiry Date</th>
                                    <th>Name</th>
                                    <th>Class</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Camino 1.0</td>
                                </tr>
                                <tr>
                                    <td>Camino 1.0</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Camino 1.0</td>
                                    <td>Camino 1.0</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <tr>
                                          <th>Sl No.</th>
                                          <th>Enquiry No.</th>
                                          <th>Enquiry Date</th>
                                          <th>Name</th>
                                          <th>Class</th>
                                    </tr>
                                </tr>
                            </tfoot>
                        </table>
                          <table id="next_table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Father name</th>
                                    <th>Contact</th>
                                    <th>Last Result</th>
                                    <th>Approve</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Camino 1.0</td>
                                    <td><button class="btn btn-success">Approve</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>Camino 1.0</td>
                                    <td><button class="btn btn-success">Approve</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <tr>
                                          <th>Father name</th>
                                          <th>Contact</th>
                                          <th>Last Result</th>
                                          <th>Approve</th>
                                          <th>Delete</th>
                                    </tr>
                                </tr>
                            </tfoot>
                        </table>


                    <div class="card-footer"  style="position: absolute; bottom:5px;">
                    <button class="btn btn-success">submit</button>
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
<script>
    $(document).ready(function(){
        $('.next').click(function(){
            $('#prev_table').fadeOut("fast");
            $('#next_table').fadeIn("fast");
        });
        $('.prev').click(function(){
            $('#prev_table').fadeIn("fast");
            $('#next_table').fadeOut("fast");
        });
    });
</script>
@endsection
