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
                        <h1>Fast-Admission</h1>
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
                            <h3 class="card-title">Fast-Admission Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="reg_no">Admission No :</label>
                                        <input type="text" class="form-control" id="reg_no" placeholder="" disabled>
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Registration No :</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="name_student" disabled>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
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
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->

                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" placeholder="Address" disabled>I request that my Son/Daughter, whose particulars are given below be registered for admission to "Aaryan Public School" , Korba Champa Road Urga (Chhattisgarh) with effect from the session starting from April  2023-2024.</textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="class">Class :</label>
                                        <input type="text" class="form-control" id="class" placeholder="Class">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date Of Issue :</label>
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
                                <div class="col-md-12">
                                    <h4>The Ward</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date Of Birth :</label>
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
                                {{-- <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="image-block" style="width: 100px; height:100px; border:2px solid black;">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-12">Choose only jpeg images.
                                                    Image size must be below than 80kb.</div>
                                                <div class="col-md-12">
                                                    <div class="form-group">

                                                        <div class="input-group">
                                                          <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                          </div>
                                                          <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                                        </div>

                                                      </div>

                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender :</label>
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
                                        <label for="age">Age :</label>
                                        <input type="text" class="form-control" id="age"
                                            placeholder="Last Result">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category :</label>
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
                                        <label for="father_name">Religion :</label>
                                        <input type="text" class="form-control" id="father_name"
                                            placeholder="Father's Name">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mother_to">Mother tongue :</label>
                                        <input type="text" class="form-control" id="mother_to">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>

                                <div class="col-md-12">
                                    <div class="card-body table-wrap">
                                        <table id="example2" class="table  table-hover">
                                            <thead>
                                                <tr>
                                                    <th>School last attended</th>
                                                    <th>Name of the School & place</th>
                                                    <th>Class passed</th>
                                                    <th>% Secured</th>
                                                    <th>Medium</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class1" >
                                                    </div></td>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class2" >
                                                    </div></td>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class3" >
                                                    </div></td>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class4" >
                                                    </div></td>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class5" >
                                                    </div></td>
                                                </tr>
                                                <tr>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class01" >
                                                    </div></td>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class6" >
                                                    </div></td>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class7" >
                                                    </div></td>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class8" >
                                                    </div></td>
                                                    <td><div class="form-group">
                                                        {{-- <label for="class">Class :</label> --}}
                                                        <input type="text" class="form-control" id="class9" >
                                                    </div></td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>


                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Achievements & Awards (if any) :</label>
                                        <textarea class="form-control" rows="3" placeholder="Address">Achievements & Awards</textarea>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Submit Registration</button>
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
