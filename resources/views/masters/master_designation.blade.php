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
                        <h1>Designation Master</h1>
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
                        <h3 class="card-title">Designation Master Form</h3>
                    </div>
                    <form action="{{ route('master.designation.save') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{isset($upd)?$upd->id:''}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Department Assign</label>
                                    <select class="form-control select2" style="width: 100%;" name="department_id">
                                        @foreach ($departments as $department)
                                            <option  value="{{ $department->id }}" {{isset($upd)&&($upd->master_department_id==$department->id)?'selected':''}}>{{ $department->department_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dsign">Designation :</label>
                                    <input type="text" class="form-control" id="dsign" placeholder="Designation" name="design" value="{{ old('house', isset($upd) ? $upd->designation_name : '') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">{{ isset($upd) ? 'Update' : 'Create Designation' }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <h3 class="card-title">Assigned Designation</h3>
                    </div>
                    <!--<div class="mx-3 my-1">
                        <h4>Create Class Section</h4>
                    </div>-->
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

                    <div class="card-body table-wrap">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                     {{-- <th>Department Assign</th> --}}
                                    <th>Designation</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php

                                @endphp
                                @foreach ($designations as $designation)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $designation->designation_name}}</td>
                                    {{-- <td>Camino 1.0</td> --}}
                                    <td><a href="{{ route('master.designation.edit', $designation->id) }}"
                                        class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></a></td>
                                            <td><a href="{{ route('master.designation.delete', $designation->id) }}"
                                                class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                     {{-- <th>Department Assign</th> --}}
                                    <th>Designation</th>
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

        <section>
 <!-- SELECT2 EXAMPLE -->


        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
@endsection
