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
{{-- @if (session()->has('upd'))
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Error</strong> {{ session()->get('upd') }}
                                </div>
                            @elseif(session()->has('upd'))
                            <h1>no</h1>
                                <div class="alert alert-success alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Success</strong> {{ session()->get('Success') }}
                                </div>
                            @endif --}}
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Session Master</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default row">
                    <div class="card-header">
                        <h3 class="card-title">Session Master Form</h3>
                    </div>
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form id="session_form" action="{{ route('master.session.save') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="session">Session :</label>
                                        <select class="form-control select2" style="width: 100%;" id="year"
                                            name="year">
                                            @for ($i = 2000; $i < 2030; $i++)
                                                <option value="{{ $i }}-{{ $i + 1 }}">
                                                    {{ $i }}-{{ $i + 1 }} </option>
                                            @endfor
                                        </select>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info" name="submit">Create New Session</button>
                    </div>
                </div>
                </form>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <h3 class="card-title">Choose Session</h3>
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
                                    <th>Session</th>
                                    <th>Set Current Session</th><!--<div class="form-group clearfix " style="margin: 0;">
                                                <div class="icheck-primary d-inline">
                                                  <input type="checkbox"  id="check_all">
                                                  <label for="check_all">
                                                    Check All
                                                  </label>
                                                </div>-->
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $sl=1;
                                $name=getAcademicSession();
                                @endphp
                                @foreach ($sessions as $session)
                                    <tr class="bg">
                                        <td>{{ $session->id }}</td>
                                        <td>{{ $session->year }}</td>
                                        <td>
                                            {{-- <form action="{{ route('master.session.update'), ['id' => $session->id] }}" >
                                                @method('PUT')
                                                @csrf --}}
                                                <form id="session_for" action="{{route('masters.master.session.update',$session->id)}}" method="post">
                                                    @method('PUT')
                                                @csrf
                                            <button type="submit" class="btn btn-success">Set</button>
                                        {{-- </form> --}}</form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Session</th>
                                    <th>Set Current Session</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="card-footer">
                        Use paginate
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('script')
@endsection
