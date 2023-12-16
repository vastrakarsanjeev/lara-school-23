@extends('layout')
@section('title')
    Brilliant Public School
@endsection
@section('style')
    <style>
        .card-header {
            border: none;
        }

        .card-body {
            padding: 0.2rem 1rem;
            color: white;
        }

        .card-header {
            padding: 0.5rem 1rem;
            color: white;

        }

        .card-footer {
            padding: 0.2rem 1rem;
            color: white;
            font-weight: bold;
            background-color: rgba(0, 0, 0, .06);

        }

        .one-box {
            background-color: rgb(192, 52, 192);
        }

        .two-box {
            background-color: rgb(16, 96, 202);
        }

        .three-box {
            background-color: rgb(80, 50, 58);
        }

        .four-box {
            background-color: rgb(31, 148, 226);
        }

        .five-box {
            background-color: rgb(156, 27, 139);
        }

        .six-box {
            background-color: rgb(78, 25, 114);
        }

        .seven-box {
            background-color: rgb(158, 124, 11);
        }

        .eight-box {
            background-color: rgb(110, 68, 5);
        }

        .nine-box {
            background-color: rgb(8, 110, 5);
        }

        .ten-box {
            background-color: rgb(117, 148, 7);
        }

        .el-box {
            background-color: rgb(148, 7, 7);
        }

        .tw-box {
            background-color: rgb(51, 74, 175);
        }

        /* .pink-box i {
                color: rgb(235, 232, 50);

            }*/

        .card-footer i {
            border: 2px solid white;
            color: rgb(24, 4, 4);
            border-radius: 50%;
            background-color: white;
            padding: 2px 2.8px;
            font-weight: 700;

        }

        .card-footer a {
            color: white
        }
    </style>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Super Dashboard</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Advanced Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card one-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-book-open fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">COLLECTED TUTION FEES</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card two-box">
                            <div class="card-header">
                                <h3 class="card-title"></i><i class="fa-solid fa-user-plus fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">COLLECTED ADMISSION FEES</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card three-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-bus-simple fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">COLLECTED TRANSPORT FEES</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card four-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-bag-shopping fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">PROVIDED DISCOUNT</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card five-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-book-open fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12"> TUTION DUE FEES</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card six-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-user-plus fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12"> ADMISSION DUE FEES</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card seven-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-bus-simple fa-2x"></i></h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12"style="font-weight: bold; font-size:20px;"> TRANSPORT DUE FEES
                                    </div>
                                    <div class="col-md-12"style="font-weight: bold; font-size:15px;"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card eight-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-bag-shopping fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">LATE FEES</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card nine-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-people-group fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">TOTAL STUDENTS</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card ten-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-user-plus fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">NEW ADMISSION</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card el-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-user-plus fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">NEW REGISTRATION</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <!-- Default box -->
                        <div class="card tw-box">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fa-solid fa-graduation-cap fa-2x"></i></h3>
                            </div>
                            <div class="card-body" style="font-weight: bold; font-size:20px;">
                                <div class="row">
                                    <div class="col-md-12">TC STUDENTS</div>
                                    <div class="col-md-12"> 80000 Rs</div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="#">More Info <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>

                </div>
            </div>
        </section>
        <!-- Main content -->

        <!-- /.content -->
    </div>
@endsection
