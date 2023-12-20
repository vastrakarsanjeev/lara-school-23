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
                        <h1>Privileges</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Admission</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="enq_form">
                                                <label for="enq_form">
                                                    Enquiry Form
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="view_enq">
                                                <label for="view_enq">
                                                    View Enquiry
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="enq_app">
                                                <label for="enq_app">
                                                    Enquiry Approval
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="dir_reg">
                                                <label for="dir_reg">
                                                    Direct Registration
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="view_reg_his">
                                                <label for="view_reg_his">
                                                    View Registration History
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="reg_app">
                                                <label for="reg_app">
                                                    Registration Approval
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="admission">
                                                <label for="admission">
                                                    Admission
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="quickadm_form">
                                                <label for="quickadm_form">
                                                    Quick Admission-Form
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="view_adm_his">
                                                <label for="view_adm_his">
                                                    View Admission History
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="stu_apgrade">
                                                <label for="stu_apgrade">
                                                    Student Upgrade
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="update_adm">
                                                <label for="update_adm">
                                                    Update Admission
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="sec_allot">
                                                <label for="sec_allot">
                                                    Section Allotment
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="student_list">
                                                <label for="student_list">
                                                    Student List(Class-Teacher)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            {{-- <div class="card-footer">

                            </div> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Fee</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="fee_coll">
                                                <label for="fee_coll">
                                                    Fee Collection
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="cheq_sta">
                                                <label for="cheq_sta">
                                                    Cheque Status
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="edit_fee">
                                                <label for="edit_fee">
                                                    Edit Fee
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="pay_his">
                                                <label for="pay_his">
                                                    Payment History
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="mng_his">
                                                <label for="mng_his">
                                                    Manage Receipt
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="new_stu_fee">
                                                <label for="new_stu_fee">
                                                    New Student Fee
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="old_stu_fee">
                                                <label for="old_stu_fee">
                                                    Old Student Fee
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="dis_app">
                                                <label for="dis_app">
                                                    Discount Approval
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="dis_his">
                                                <label for="dis_his">
                                                    Discount History
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="adm_can">
                                                <label for="adm_can">
                                                    Admission Cancel Apply
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="adm_can">
                                                <label for="adm_can">
                                                    Admission Cancel Approval
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="can_adm">
                                                <label for="can_adm">
                                                    View Cancel Admission
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="staff_dis">
                                                <label for="staff_dis">
                                                    Give/Revoke Staff Discount
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Library</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="book_allot">
                                                <label for="book_allot">
                                                    Book Allotment & Return
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="issue_book">
                                                <label for="issue_book">
                                                    Issue Book History
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="book_rc">
                                                <label for="book_rc">
                                                    Book Records
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="book_reg">
                                                <label for="book_reg">
                                                    Book Register Form
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="pub_details">
                                                <label for="pub_details">
                                                    Publisher Details
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="remove_book">
                                                <label for="remove_book">
                                                    Remove Book
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="lib_fine">
                                                <label for="lib_fine">
                                                    Library Fine
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="acc_book">
                                                <label for="acc_book">
                                                    Academic Book Allot & Return
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="academ_lib">
                                                <label for="academ_lib">
                                                    Academics Library History
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="academi_fine">
                                                <label for="academi_fine">
                                                    Academic Library Fine
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Time-table</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="time_table_teach">
                                                <label for="time_table_teach">
                                                    View Timetable (Teacher )
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="create_time_table">
                                                <label for="create_time_table">
                                                    Create Auto Time-table
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="time_table_cw">
                                                <label for="time_table_cw">
                                                    View Time-Table(Class-wise)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="result_pdf">
                                                <label for="result_pdf">
                                                    View Time-table(Teacher-wise)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="update_tt">
                                                <label for="update_tt">
                                                    Update Time-table
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="delete_tt">
                                                <label for="delete_tt">
                                                    Delete Time-table
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="daily_routine">
                                                <label for="daily_routine">
                                                    Daily Routine
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="tt_class_teacher">
                                                <label for="tt_class_teacher">
                                                    View Time-table Class-Teacher
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="tt_teacher_ct">
                                                <label for="tt_teacher_ct">
                                                    View Time-table Teacher-wise(CT)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">HR</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="register_new_emp">
                                                <label for="register_new_emp">
                                                    Register New Employee
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="loan_app">
                                                <label for="loan_app">
                                                    Loan Apply Form
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="final_salary">
                                                <label for="final_salary">
                                                    Final Salary View
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_salary_details">
                                                <label for="emp_salary_details">
                                                    Emp Details & Salary Update
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="view_adv">
                                                <label for="view_adv">
                                                    View Advance Loan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="view_emp">
                                                <label for="view_emp">
                                                    View Employee
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="view_pf_loan">
                                                <label for="view_pf_loan">
                                                    View Pf Loan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="salary_certi">
                                                <label for="salary_certi">
                                                    Salary Certificate
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_attend">
                                                <label for="emp_attend">
                                                    Employee Attendance
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_app">
                                                <label for="emp_app">
                                                    Employee Approval
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Result</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="create_result">
                                                <label for="create_result">
                                                    Create Result
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="view-result">
                                                <label for="view-result">
                                                    View Result
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="create_result_teach">
                                                <label for="create_result_teach">
                                                    Create Result by Teacher
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="view_result_pdf">
                                                <label for="view_result_pdf">
                                                    View Result (PDF)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="create_result_ct">
                                                <label for="create_result_ct">
                                                    Create Result(Class-Teacher)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- radio -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="final_result">
                                                <label for="final_result">
                                                    Finalised Result Entry
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Mail</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="mail_box">
                                                <label for="mail_box">
                                                    Mail Box
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Database</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="data_backup">
                                                <label for="data_backup">
                                                    Database Backup
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="data_restore">
                                                <label for="data_restore">
                                                    Database Restore
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="remote_restore">
                                                <label for="remote_restore">
                                                    Remote Restore
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Exam-Timetable</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="exam_tt">
                                                <label for="exam_tt">
                                                    Exam Time Table
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Log</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="exam_tt" id="view_log">
                                                <label for="view_log">
                                                    View Log
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Teacher Class Assign</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="teach_class_assign_pri">
                                                <label for="teach_class_assign_pri">
                                                    Teacher Class Assign(Primary)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="teach_class-assign_med">
                                                <label for="teach_class-assign_med">
                                                    Teacher Class Assign(6-8)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">SMS</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="sms">
                                                <label for="sms">
                                                    SMS
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="birthday_sms">
                                                <label for="birthday_sms">
                                                    Birthday SMS
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="remider_sms">
                                                <label for="remider_sms">
                                                    Fee Reminder SMS
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Transfer-Certificate</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="apply_tc">
                                                <label for="apply_tc">
                                                    Apply TC
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="tc_appli">
                                                <label for="tc_appli">
                                                    View TC Applicants
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="approval">
                                                <label for="approval">
                                                    TC Approval
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="issue_tc">
                                                <label for="issue_tc">
                                                    Issue TC
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Inventory-Master</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="company_master">
                                                <label for="company_master">
                                                    TUnit/Category/Company Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="bank_master">
                                                <label for="bank_master">
                                                    Warehouse/Product/bank Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="party">
                                                <label for="party">
                                                    sub-Category/Party
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="item_master">
                                                <label for="item_master">
                                                    Item Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Master</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="section_master">
                                                <label for="section_master">
                                                    Section-Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="library_rule_master">
                                                <label for="library_rule_master">
                                                    Library Rule Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="salary_cal_master">
                                                <label for="salary_cal_master">
                                                    Salary Calculation Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="sub_class_asign_master">
                                                <label for="sub_class_asign_master">
                                                    Subject-Class Assign Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="house_master">
                                                <label for="house_master">
                                                    House Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="fee_master">
                                                <label for="fee_master">
                                                    Fee Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="depart_master">
                                                <label for="depart_master">
                                                    Department Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="design_master">
                                                <label for="design_master">
                                                    Designation Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="dis_coupon_master">
                                                <label for="dis_coupon_master">
                                                    Discount Coupon-Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="create_sub">
                                                <label for="create_sub">
                                                    Create Subject
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="leave_master">
                                                <label for="leave_master">
                                                    Leave Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="create-act">
                                                <label for="create-act">
                                                    Create Activity
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="session_master">
                                                <label for="session_master">
                                                    Session Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_salary_master">
                                                <label for="emp_salary_master">
                                                    Employee Salary Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="add_cul_activity">
                                                <label for="add_cul_activity">
                                                    Add Cultural Activity
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="allot_cl_teach">
                                                <label for="allot_cl_teach">
                                                    Allot Class-Teacher
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="examJ_act_master">
                                                <label for="examJ_act_master">
                                                    Exam Activation Master
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">HR Report</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_hiring">
                                                <label for="emp_hiring">
                                                    Employee Hiring Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_salary">
                                                <label for="emp_salary">
                                                    Official Employee Salary Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_leave">
                                                <label for="emp_leave">
                                                    Official Employee Leave Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_promotion">
                                                <label for="emp_promotion">
                                                    Employee Promotion
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_working">
                                                <label for="emp_working">
                                                    Employee Total Working Days
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_anni">
                                                <label for="emp_anni">
                                                    Employee Anniversary Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_contact">
                                                <label for="emp_contact">
                                                    Employee Emergency Contact Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_ctc">
                                                <label for="emp_ctc">
                                                    Employee CTC Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_re-hiring">
                                                <label for="emp_re-hiring">
                                                    Employee Re-Hiring Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_loan">
                                                <label for="emp_loan">
                                                    Employee Advance Loan Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="emp_pf_loan">
                                                <label for="emp_pf_loan">
                                                    Employee Pf Loan Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">House Assign</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="house_ssign">
                                                <label for="house_ssign">
                                                    House Assign Form
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="student_house">
                                                <label for="student_house">
                                                    View Student House
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="house_mentor">
                                                <label for="house_mentor">
                                                    Create House Mentor
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Club Activity Assign</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="club_assign_teach">
                                                <label for="club_assign_teach">
                                                    Club Activity Assign Teacher
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="club_assign_stu">
                                                <label for="club_assign_stu">
                                                    Club Activity Assign Student
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="club_wise_stu">
                                                <label for="club_wise_stu">
                                                    Club Wise Student
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Fee Report</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="fee_report">
                                                <label for="fee_report">
                                                    Fee Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="adm_fee_report">
                                                <label for="adm_fee_report">
                                                    Admission Fee Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="trans_fee_report">
                                                <label for="trans_fee_report">
                                                    Transport Fee Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="tution_fee">
                                                <label for="tution_fee">
                                                    Tuition Fee Defaulters
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="admission_fee">
                                                <label for="admission_fee">
                                                    Admission Fee Defaulters
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="trans_fee">
                                                <label for="trans_fee">
                                                    Transport Fee Defaulters
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="fee_payment">
                                                <label for="fee_payment">
                                                    Fee Payment Status
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Student Report</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="student_report">
                                                <label for="student_report">
                                                    Student Report
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
                    <div class=" col-md-6">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Admin Priviliges</h3>
                            </div>
                            <div class="card-body">
                                <!-- Minimal style -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- checkbox -->
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="admin_privilege">
                                                <label for="admin_privilege">
                                                    Admin Priviliges
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Minimal red style -->
                            </div>
                        </div>
                    </div>
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
