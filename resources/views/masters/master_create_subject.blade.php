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

        .alert {
            position: relative;
        }

        .btn-close {
            position: absolute;
            top: 7px;
            right: 36px;
            transform: translate(50%, 50%);
        }
    </style>
@endsection
@section('content')
    {{-- @if (session()->has('success'))
<h1 class="text-success">{{session("success")}}</h1><div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@else
<h1 class="text-danger">{{session("error")}}</h1>
@endif --}}
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-md-12">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>
                                <i class="fa-solid fa-xmark btn-close"></i>
                            </div>
                        @else
                            <h1 class="text-danger">{{ session('error') }}</h1>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <h1>Create Subject </h1>
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
                        <h3 class="card-title">Create Subject Form</h3>
                    </div>
                    <form action="{{ route('master.create.subject.save') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ isset($upd) ? $upd->id : '' }}">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="add_subject">Add Subject :</label>
                                        <input type="text" class="form-control" id="add_subject" name="add_subject"
                                            value="{{ old('add_subject', isset($upd) ? $upd->subject : '') }}">
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
                            <button type="submit"
                                class="btn btn-success">{{ isset($upd) ? 'Update' : 'Create Section' }}</button>
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
                        <h3 class="card-title">Show Subjects</h3>
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
                                    <th>Subject</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td>{{ $subject->id }}</td>
                                        <td>{{ $subject->subject }}</td>
                                        <td><a href="{{ route('masters.create.subject.edit', $subject->id) }}"
                                                class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></a></td>
                                        <td><a href="{{ route('masters.master.create.subject.destroy', $subject->id) }}"
                                                class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Subject</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="card-footer">
                        Use paginate
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.btn-close').click(function() {
                $('.alert').fadeOut();
            });

        });
    </script>
@endsection
