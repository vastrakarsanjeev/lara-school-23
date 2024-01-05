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
        .alert{
            position: relative;
        }
        .btn-close {
    position: absolute;
    top: 7px;
    right: 36px;
    transform: translate(50%,50%);
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
                    <div class="col-md-12">@if(session()->has("success"))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{session("success")}}</strong>
                            <i class="fa-solid fa-xmark btn-close"></i>
                          </div>
                    @else
                        <h1 class="text-danger">{{session("error")}}</h1>
                    @endif</div>
                    <div class="col-sm-6">
                        <h1>Update Class </h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if(isset($classfind))
                <form id="session_for" action="{{ route('masters.master.class.update', $classfind->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Update Class Form</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="class_name">Class Name:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa-solid fa-table"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="class_name" name="class_name"
                                                value="{{ old('class_name', $classfind->class) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Update Class</button>
                        </div>
                    </div>
                </form>@endif
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <h3 class="card-title">Show Class</h3>
                    </div>
                    <!--<div class="mx-3 my-1">
                                    <h4>Create Class Section</h4>
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
                                    <th>Class</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $class)
                                    <tr>
                                        <td>{{ $class->id }}</td>
                                        <td>{{ $class->class }}</td>
                                        <td><a href="{{ route('masters.masterclass.edit', $class->id) }}"
                                                class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Class</th>
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
<script>
    $(document).ready(function(){
        $('.btn-close').click(function(){
            $('.alert').fadeOut();
        });

    });
</script>
@endsection
