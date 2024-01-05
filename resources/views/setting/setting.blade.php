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
        @media only screen and (max-width: 600px) {
            .table-wrap {
    max-width: 1000px;
  }
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
                        <h1>Setting</h1>
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
                            <h3 class="card-title">Setting Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="org_name">Organization Name : :</label>
                                        <input type="text" class="form-control" id="org_name">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="short_name">Short Name :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="short_name">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="aff_no">Affiliation No. :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="aff_no">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gst_no">GSTIN No. :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="gst_no">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="pan_no">Pan No. :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="pan_no">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phone_no">Phone No. :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="phone_no">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email Id :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="theme_color">Theme Color :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="theme_color">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label for="#">Address :</label>
                                        <textarea class="form-control" rows="3" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="info-box row">
                                      <div class="info-box-icon bg-light col-sm-5 col-md-4"><span  style="width: 110px; height:100px;"><img src="{{asset('assets/img/avatar5.png')}}" alt="" srcset="" width="100%" height="100%"></span></div>

                                      <div class="info-box-content col-sm-7 col-md-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <span class="">Choose only jpeg images.
                                                    Image size must be below than 80kb.</span>
                                            </div>
                                            <div class="col-md-12">
                                                <span class=""><input type="file" name="" id=""></span>
                                            </div>
                                        </div>
                                      </div>
                                      <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                  </div>
                            <!-- /.row -->
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit</button>
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

        <!-- /.content -->
    </div>
@endsection
@section('script')
@endsection
