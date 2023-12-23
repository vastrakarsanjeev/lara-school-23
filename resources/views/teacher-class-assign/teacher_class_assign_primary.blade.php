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
        background-color: rgb(21, 62, 70,0.5);
            border-radius: 10px
   }
   .card-success:not(.card-outline)>.card-header {
    background-color: #2f5564;
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
                        <h1>Teacher Class Assignment (Primary Section):</h1>
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
                        <h3 class="card-title">Teacher Class Assignment (Primary Section): Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Section</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">2023-24</option>
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
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Class</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="selected">abc</option>
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
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="card card-success">
                                    <div class="card-header">
                                      <h3 class="card-title">Choose Subject :</h3>
                                    </div>
                                    <div class="card-body">
                                      <!-- Minimal style -->
                                      <div class="row">
                                        <div class="col-sm-4">
                                          <!-- checkbox -->
                                          <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox" id="math_check">
                                              <label for="math_check">
                                                Maths
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="science_check">
                                                <label for="science_check">
                                                  Science
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="s_st_check">
                                                <label for="s_st_check">
                                                  S.St
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="ict_check">
                                                <label for="ict_check">
                                                  ICT
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="english_check">
                                                <label for="english_check">
                                                  English
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="hindi_check">
                                                <label for="hindi_check">
                                                  Hindi
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="phe_check">
                                                <label for="phe_check">
                                                  PHE
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                        <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="music_check">
                                                <label for="music_check">
                                                  Music
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                        <div class="col-sm-4">
                                          <!-- radio -->
                                          <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox" id="dance_check" >
                                              <label for="dance_check">
                                                Dance
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- Minimal red style -->
                                      <div class="row">
                                        <div class="col-sm-4">
                                          <!-- checkbox -->
                                          <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox"  id="art_check">
                                              <label for="art_check">
                                                Arts
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="sanskrit_check">
                                                <label for="sanskrit_check">
                                                  Sanskrit
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="evs_check">
                                                <label for="evs_check">
                                                  EVS
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="biology_check">
                                                <label for="biology_check">
                                                  Biology
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="physics_check">
                                                <label for="pysics_check">
                                                  Physics
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="chemistry_check">
                                                <label for="chemistry_check">
                                                  Chemistry
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- radio -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox"   id="info_pre">
                                                <label for="info_pre">
                                                  Information Practices
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                        <div class="col-sm-4">
                                          <!-- radio -->
                                          <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox" name="r2"  id="aspect_check">
                                              <label for="aspect_check">
                                                Aspects
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- radio -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" name="r2"  id="game_check">
                                                <label for="game_check">
                                                  Game
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                      <!-- Minimal red style -->
                                      <div class="row">
                                        <div class="col-sm-4">
                                          <!-- checkbox -->
                                          <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox"  id="computer_check">
                                              <label for="computer_check">
                                                Computer
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox"  id="gk_check">
                                                <label for="gk_check">
                                                  Gk
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox"  id="moralsce_check">
                                                <label for="moralsce_check">
                                                  Moral Science
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox"  id="art_craf_check">
                                                <label for="art_craf_check">
                                                  Art/Craft
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox"  id="checkboxSuccess3">
                                                <label for="checkboxSuccess3">
                                                  Personal and Social Traits
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <!-- /.card-body -->
                                   <!-- <div class="card-footer">

                                    </div>-->
                                  </div>
                                <!-- /.form-group -->

                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-6">
                                <div class="card card-success">
                                    <div class="card-header">
                                      <h3 class="card-title">Choose Class :</h3>
                                    </div>
                                    <div class="card-body">
                                      <!-- Minimal style -->

                                      <!-- Minimal red style -->

                                      <!-- Minimal red style -->
                                      <div class="row">
                                        <div class="col-sm-4">
                                          <!-- checkbox -->
                                          <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                              <input type="checkbox" >
                                              <label for="computer_check">
                                                Class-1 Happy
                                              </label>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" >
                                                <label for="gk_check">
                                                    Class-1 Happy
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" >
                                                <label for="moralsce_check">
                                                    Class-1 Happy
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" >
                                                <label for="art_craf_check">
                                                    Class-1 Happy
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-sm-4">
                                            <!-- checkbox -->
                                            <div class="form-group clearfix">
                                              <div class="icheck-primary d-inline">
                                                <input type="checkbox" >
                                                <label for="checkboxSuccess3">
                                                    Class-1 Happy
                                                </label>
                                              </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <!-- /.card-body -->
                                   <!-- <div class="card-footer">

                                    </div>-->
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
                        <button type="submit" class="btn btn-success">Assign</button>
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
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default" style="width:100; over-flow:hidden;">
                    <div class="card-header">
                        <h3 class="card-title">Teacher Class Assignment (Primary Section): List</h3>
                    </div>
                   <!-- <div class="mx-3 my-1">
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
                                    <th><div class="form-group clearfix " style="margin: 0;">
                                        <div class="icheck-primary d-inline">
                                          <input type="checkbox"  id="check_all">
                                          <label for="check_all">
                                            Check All
                                          </label>
                                        </div>
                                      </div></th>
                                    <th>Sl No.</th>
                                    <th>Employee code</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Subject</th>
                                    <th>Session</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                </tr>
                                <tr>
                                    <td>Gecko</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                    <td>A</td>
                                    <td>Camino 1.5</td>
                                    <td>OSX.3+</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th><div class="form-group clearfix " style="margin: 0;">
                                        <div class="icheck-primary d-inline">

                                          <label for="check_all_foot">
                                            Check All
                                          </label>
                                        </div>
                                      </div></th>
                                      <th>Sl No.</th>
                                      <th>Employee code</th>
                                      <th>Name</th>
                                      <th>Class</th>
                                      <th>Subject</th>
                                      <th>Session</th>
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
@endsection
