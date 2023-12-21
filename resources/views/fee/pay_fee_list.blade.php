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
                        <h1>Filter Students</h1>
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
                        <h3 class="card-title">Fee Pannel</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name_father">Search By Name /Admission No :</label>
                                    <input type="text" class="form-control" id="name_father" placeholder="Type here to search">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="father_mobile">Search Father name / Mobile No :</label>
                                    <input type="text" class="form-control" id="father_mobile" placeholder="Type hear to search">
                                </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12"> <label >Class :</label></div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success m-1">class-1 joy</button>
                            <button type="submit" class="btn btn-success m-1">class-2 joy</button>
                            <button type="submit" class="btn btn-success m-1">class-3 joy</button>
                            <button type="submit" class="btn btn-success m-1">class-4 joy</button>
                            <button type="submit" class="btn btn-success m-1">class-5 joy</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <div class="mx-3 my-1">
                            <h4>Fee Pannel list</h4>
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
                                    <th>Section</th>
                                    <th>Session</th>
                                    <th>Academic Fee</th>
                                    <th>Transport Fee</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Admission No.</th>
                                    <th>Student Name</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Session</th>
                                    <th>Academic Fee</th>
                                    <th>Transport Fee</th>
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
    </div>
@endsection
@section('script')
@endsection
