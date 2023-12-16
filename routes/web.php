<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\SuperDashbordController;
Use App\Http\Controllers\MasterSectionController;
Use App\Http\Controllers\MasterLibraryRuleController;
Use App\Http\Controllers\MasterSalaryCalculationController;
Use App\Http\Controllers\MasterAddSubjectToClassController;
Use App\Http\Controllers\MasterEmpolyeeSalaryController;
Use App\Http\Controllers\MasterHouseController;
Use App\Http\Controllers\MasterCreateActivityController;
Use App\Http\Controllers\MasterFeeController;
Use App\Http\Controllers\MasterDepartmentController;
Use App\Http\Controllers\MasterDesignationController;
Use App\Http\Controllers\MasterClassController;
Use App\Http\Controllers\MasterDiscountCouponController;
Use App\Http\Controllers\MasterCreateSubjectController;
Use App\Http\Controllers\MasterLiveController;
Use App\Http\Controllers\MasterSessionController;
Use App\Http\Controllers\AdmissionEnquiryController;
Use App\Http\Controllers\AdmissionViewEnquiryController;
Use App\Http\Controllers\AdmissionViewEnquiryUnderProcessController;
Use App\Http\Controllers\AdmissionViewDisQualifiedEnquiryController;
Use App\Http\Controllers\AdmissionEnquiryApprovalDetailsController;
Use App\Http\Controllers\AdmissionEnquiryApprovalHistoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

//Route::get('/master', function () {
  //  return view('master_section');s
//});
Route::get('/super_dashboard',[SuperDashbordController::class,'view'])->name('super.dashboard');
Route::get('/masters/master_section',[MasterSectionController::class,'view'])->name('master.section');
Route::get('/masters/master_library_rule',[MasterLibraryRuleController::class,'view'])->name('master.library.rule');
Route::get('/masters/master_salary_calculation',[MasterSalaryCalculationController::class,'view'])->name('master.salary.calculation');
Route::get('/masters/master_add_subject_class',[MasterAddSubjectToClassController::class,'view'])->name('master.add.subject.to.class');
Route::get('/masters/master_empolyee_salary',[MasterEmpolyeeSalaryController::class,'view'])->name('master.empolyee.salary');
Route::get('/masters/master_house',[MasterHouseController::class,'view'])->name('master.house');
Route::get('/masters/master_create_activity',[MasterCreateActivityController::class,'view'])->name('master.create_activity');
Route::get('/masters/master_fee',[MasterFeeController::class,'view'])->name('master.fee');
Route::get('/masters/master_department',[MasterDepartmentController::class,'view'])->name('master.department');
Route::get('/masters/master_designation',[MasterDesignationController::class,'view'])->name('master.designation');
Route::get('/masters/master_class',[MasterClassController::class,'view'])->name('master.class');
Route::get('/masters/master_discount_coupon',[MasterDiscountCouponController::class,'view'])->name('master.discount_coupon');
Route::get('/masters/master_create_subject',[MasterCreateSubjectController::class,'view'])->name('master.create.subject');
Route::get('/masters/master_leave',[MasterLiveController::class,'view'])->name('master.leave');
Route::get('/masters/master_session',[MasterSessionController::class,'view'])->name('master.session');
Route::get('/admission/enquiry',[AdmissionEnquiryController::class,'view'])->name('admission.enquiry');
Route::get('/admission/view_enquiry',[AdmissionViewEnquiryController::class,'view'])->name('admission.view.enquiry');
Route::get('/admission/view_enquiry_underprocess',[AdmissionViewEnquiryUnderProcessController::class,'view'])->name('admission.view.enquiry.underprocess');
Route::get('/admission/view_enquiry_disqualified',[AdmissionViewDisQualifiedEnquiryController::class,'view'])->name('admission.view.enquiry.disqualified');
Route::get('/admission/enquiry_approval_details',[AdmissionEnquiryApprovalDetailsController::class,'view'])->name('admission.enquiry.approval.details');
Route::get('/admission/enquiry_approval_history',[AdmissionEnquiryApprovalHistoryController::class,'view'])->name('admission.enquiry.approval.history');

