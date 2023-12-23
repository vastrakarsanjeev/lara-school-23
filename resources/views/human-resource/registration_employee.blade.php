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
                        <h1>Register New Employee </h1>
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
                            <h3 class="card-title">Register New Employee  Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Official & Support Staff Type :</label>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date Of Joining :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Department :</label>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Role :</label>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="user_id">User Id :</label>
                                        <input type="text" class="form-control" id="user_id" placeholder="User Id">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="password">Password :</label>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="first_name">First Name :</label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="last_name">Last Name :</label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Date Of Birth :</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="class">Basic Salary :</label>
                                        <input type="text" class="form-control" id="class" placeholder="Class">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="class">Phone No. :</label>
                                        <input type="text" class="form-control" id="class" placeholder="Class">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="class">Emergency Phone No. :</label>
                                        <input type="text" class="form-control" id="class" placeholder="Class">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label for="address">Address :</label>
                                        <textarea class="form-control" rows="3" placeholder="Address" id="address"></textarea>
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="info-box row">
                                        <div class="info-box-icon bg-light col-sm-5 col-md-4"><span
                                                style="width: 110px; height:100px;"><img
                                                    src="{{ asset('assets/img/avatar5.png') }}" alt=""
                                                    srcset="" width="100%" height="100%"></span></div>

                                        <div class="info-box-content col-sm-7 col-md-8">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span class="">Attachment Your Qualification Certificate :</span>
                                                </div>
                                                <div class="col-md-12">
                                                    <span class=""><input type="file" name=""
                                                            id=""></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class=" col-12">
                                    <div class="row">
                                        <h3>Family Details (Father/Spouse & Children,Other)</h3>
                                    </div>
                                    <div class="info-box bg-light row">
                                        <div class="card-body table-wrap">
                                            <table id="example2" class="table  table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No.</th>
                                                        <th>Name</th>
                                                        <th>Relation</th>
                                                        <th>Occupation</th>
                                                        <th>Yearly Inocome</th>
                                                        <th>Organization with complete Address</th>
                                                        <th>Telephone No.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Add New Line</button>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class=" col-12">
                                    <div class="row">
                                        <h3>Educational Qualification</h3>
                                    </div>
                                    <div class="info-box bg-light row">
                                        <div class="card-body table-wrap">
                                            <table id="example2" class="table  table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No.</th>
                                                        <th>Particular</th>
                                                        <th>Year Of Passing</th>
                                                        <th>Subject</th>
                                                        <th>Board/College/University</th>
                                                        <th>Aggregate % Marks</th>
                                                        <th>Regular/Correspondence</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Add New Line</button>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class=" col-12">
                                    <div class="row">
                                        <h3>Work Experience</h3>
                                    </div>
                                    <div class="info-box bg-light row">
                                        <div class="card-body table-wrap">
                                            <table id="example2" class="table  table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No.</th>
                                                        <th>Detail of the job</th>
                                                        <th>Last Salary drawn (Gross)</th>
                                                        <th>Designation</th>
                                                        <th>DOJ</th>
                                                        <th>Date of leaving</th>
                                                        <th>Reason for leaving</th>
                                                        <th>Name of the Organization worked with</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label>Date Of Birth :</label> --}}
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label>Date Of Birth :</label> --}}
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label>Date Of Birth :</label> --}}
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label>Date Of Birth :</label> --}}
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Add New Line</button>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class=" col-12">
                                    <div class="row">
                                        <h3>Security Cheque Record</h3>
                                    </div>
                                    <div class="info-box bg-light row">
                                        <div class="card-body table-wrap">
                                            <table id="example2" class="table  table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No.</th>
                                                        <th>Bank</th>
                                                        <th>Account</th>
                                                        <th>Branch</th>
                                                        <th>Cheque No.</th>
                                                        <th>Amount</th>
                                                        <th>Cheque Renewal Date</th>
                                                        <th>Account Manager</th>
                                                        <th>Remark</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label>Date Of Birth :</label> --}}
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label>Date Of Birth :</label> --}}
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Add New Line</button>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class=" col-12">
                                    <div class="row">
                                        <h3>Training Attended</h3>
                                    </div>
                                    <div class="info-box bg-light row">
                                        <div class="card-body table-wrap">
                                            <table id="example2" class="table  table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No.</th>
                                                        <th>Name Of Training</th>
                                                        <th>Place</th>
                                                        <th>Session</th>
                                                        <th>from</th>
                                                        <th>To</th>
                                                        <th>Remark</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Add New Line</button>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class=" col-12">
                                    <div class="row">
                                        <h3>Nominee Details</h3>
                                    </div>
                                    <div class="info-box bg-light row">
                                        <div class="card-body table-wrap">
                                            <table id="example2" class="table  table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No.</th>
                                                        <th>Name & Address</th>
                                                        <th>Phone</th>
                                                        <th>Relation</th>
                                                        <th>DOB</th>
                                                        <th>Pan No,</th>
                                                        <th>Aadhar NO.</th>
                                                        <th>Remark</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label>Date Of Birth :</label> --}}
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label>Date Of Birth :</label> --}}
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                                    </div>
                                                                    <input type="date" class="form-control" data-inputmask-alias="datetime"
                                                                        data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                                </div>
                                                                <!-- /.input group -->
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Add New Line</button>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                                <div class=" col-12">
                                    <div class="row">
                                        <h3>Socio,Culture and other activities</h3>
                                    </div>
                                    <div class="info-box bg-light row">
                                        <div class="card-body table-wrap">
                                            <table id="example2" class="table  table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Sl.No.</th>
                                                        <th>Name of the Institution</th>
                                                        <th>Status</th>
                                                        <th>From</th>
                                                        <th>To</th>
                                                        <th>Reason For Discontinuation</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                {{-- <label for="class">Class :</label> --}}
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Add New Line</button>
                                        </div>
                                    </div>
                                    <!-- /.info-box -->
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit & Next</button>
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
