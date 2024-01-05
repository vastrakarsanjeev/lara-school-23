@extends('layout')
@section('title')
Brilliant Public School
@endsection
@section('style')
    <style>
/* .card-header {
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

    }

    ::-webkit-scrollbar-track{
        background-color:transparent;
    }
    ::-webkit-scrollbar-thumb{
        background-color: rgb(21, 62, 70);
            border-radius: 10px
   } */
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
                        <h1>Create Activity  </h1>
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
                        <h3 class="card-title">Create Activity  Form</h3>
                    </div>
                    <form action="{{ route('master.create.activity.save') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ isset($upd) ? $upd->id : '' }}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="activity">Activity :</label>
                                    <input type="text" class="form-control" id="activity" placeholder="Activity Decided" name="activity" value="{{ old('depart_name', isset($upd) ? $upd->activity : '') }}">
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">{{ isset($upd) ? 'Update' : 'Submit' }}</button>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <h3 class="card-title">Update Activity</h3>
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
                                    <th>Activity</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($activities as $activity)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $activity->activity }}</td>
                                    <td><a href="{{ route('master.create.activity.edit', $activity->id) }}"
                                        class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></a></td>
                                            <td><a href="{{ route('master.create.activity.delete', $activity->id) }}"
                                                class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Types Of House</th>
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
@endsection
