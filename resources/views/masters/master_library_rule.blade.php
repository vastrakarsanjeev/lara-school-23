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
                        <h1>Library Rule Master</h1>
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
                        <h3 class="card-title">Library Rule Master</h3>
                    </div>
                    <form action="{{ route('master.library.rule.save') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ isset($upd) ? $upd->id : '' }}">
                        <div class="card-body">
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="issu_with_time">No. of days book(s) to be issued without fine:</label>
                                        <input type="text" class="form-control" id="issu_with_time"
                                            placeholder="No. of days book(s) to be issued without fine"
                                            name="one"
                                            value="{{ old('one', isset($upd) ? $upd->no_book_without_fine : '') }}">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="issu_at_time">Max. no. of books to be issued at a time :</label>
                                        <input type="text" class="form-control" id="issu_at_time"
                                            placeholder="Max. no. of books to be issued at a time" name="two"
                                            value="{{ old('two', isset($upd) ? $upd->book_issue_at_time : '') }}">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="late_fine">Late fine :</label>
                                        <input type="number" class="form-control" id="late_fine" placeholder="Late fine"
                                            name="three" value="{{ old('three', isset($upd) ? $upd->let_fine : '') }}">
                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="late_fee">No. of days for Late Fee :</label>
                                        <input type="number" class="form-control" id="late_fee"
                                            placeholder="No. of days for Late Fee" name="four"
                                            value="{{ old('four', isset($upd) ? $upd->no_of_day_for_let_fee : '') }}">
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
                            <button type="submit" class="btn btn-info">{{ isset($upd) ? 'Update' : 'Create Library Rule' }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->

                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Library Rule Master</h3>
                    </div>
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
                    <!-- /.card-header -->
                    <div class="card-body table-wrap">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>No. of days book(s) to be issued without fine</th>
                                    <th>Max. no. of books to be issued at a time</th>
                                    <th>Late fine</th>
                                    <th>No. of days for Late Fee</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($libraryrules as $libraryrule)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $libraryrule->no_book_without_fine }}</td>
                                <td>{{ $libraryrule->book_issue_at_time }}</td>
                                <td>{{ $libraryrule->let_fine }}</td>
                                <td>{{ $libraryrule->no_od_day_for_let_fee }}</td>
                                <td><a href="{{ route('master.library.rule.edit', $libraryrule->id) }}"
                                    class="btn btn-outline-info"><i class="fa-solid fa-pen-to-square"></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>No. of days book(s) to be issued without fine</th>
                                    <th>Max. no. of books to be issued at a time</th>
                                    <th>Late fine</th>
                                    <th>No. of days for Late Fee</th>
                                    <th>Edit</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Use paginate
                    </div>
                </div>
                <!-- /.card -->


                <!-- /.card -->


                <!-- /.row -->

                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
@section('script')
@endsection
