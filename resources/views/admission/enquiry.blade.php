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
                        <h1>Enquiry </h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="#">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Enquiry  Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sl_no">Serial No : :</label>
                                    <input type="text" class="form-control" id="sl_no" placeholder="">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Enquiry Date:</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                      </div>
                                      <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                  </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name_student">Name of Student :</label>
                                    <input type="text" class="form-control" id="name_student" placeholder="Name of Student">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Class in which Admission to be Sought :</label>
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
                                <!-- /.form-group -->

                                <!-- /.form-group -->

                            <!-- /.form-group -->

                            <!-- /.form-group -->
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_school">Last School :</label>
                                    <input type="text" class="form-control" id="last_school" placeholder="Last School">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_result">Last Result in % :</label>
                                    <input type="text" class="form-control" id="last_result" placeholder="Last Result in %">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="father_name">Father's Name :</label>
                                    <input type="text" class="form-control" id="father_name" placeholder="Father's Name">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-sm-6">
                                <!-- textarea -->
                                <div class="form-group">
                                  <label>Address</label>
                                  <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                                </div>
                              </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact No :</label>

                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                      </div>
                                      <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Contact No">
                                    </div>
                                    <!-- /.input group -->
                                  </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Remark :</label>
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
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->

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
                        <button type="submit" class="btn btn-info">Submit Enquiry</button>
                    </div>

                </div>
                <!-- /.card -->


                <!-- /.card -->


                <!-- /.card -->


                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->
            </form>
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
