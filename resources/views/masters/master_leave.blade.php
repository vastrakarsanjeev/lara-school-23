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
                        <h1>Leave Master  </h1>
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
                        <h3 class="card-title">Leave Master  Form</h3>
                    </div>
                    <form action="{{ route('master.leave.save') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{isset($upd)?$upd->id:''}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cl">CL :</label>
                                    <input type="text" class="form-control" id="cl" placeholder="Casual Leave" name="cl">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ml">ML :</label>
                                    <input type="text" class="form-control" id="ml" placeholder="Medical Leave" name="ml">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="vl">VL :</label>
                                    <input type="text" class="form-control" id="vl" placeholder="Vacation Leave" name="vl">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sl">SL :</label>
                                    <input type="text" class="form-control" id="sl" placeholder="Special Leave" name="sl">
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
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
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
                        <h3 class="card-title">Leave Master List</h3>
                    </div>
                    <!--<div class="mx-3 my-1">
                        <h4>Create Class Section</h4>
                    </div>-->
                    <div class="row mx-3 my-1 uper_div">
                        <div class="col-md-6  d-flex align-items-center justify-content-md-start justify-content-sm-center my-1 ">
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
                                    <th>Casual Leave</th>
                                    <th>Medical Leave</th>
                                    <th>Vacation Leave</th>
                                    <th>Special Leave</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td><button class="btn btn-success">Update</button></td>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td><button class="btn btn-success">Update</button></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Casual Leave</th>
                                    <th>Medical Leave</th>
                                    <th>Vacation Leave</th>
                                    <th>Special Leave</th>
                                    <th>Update</th>
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
