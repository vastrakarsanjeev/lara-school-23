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
Use App\Http\Controllers\AdmissionDirectRegistrationController;
Use App\Http\Controllers\AdmissionRegistrationdeclinedController;
Use App\Http\Controllers\AdmissionRegistrationHistoryController;
Use App\Http\Controllers\AdmissionRegistrationApprovalSectionController;
Use App\Http\Controllers\AdmissionRegistrationApprovalHistoryController;
Use App\Http\Controllers\AdmissionAwaitingController;
Use App\Http\Controllers\AdmissionFastAdmissionController;
Use App\Http\Controllers\AdmissionHistoryController;
Use App\Http\Controllers\AdmissionDocumentPendingController;
Use App\Http\Controllers\AdmissionStudentUpgradeController;
Use App\Http\Controllers\AdmissionUpdateController;
Use App\Http\Controllers\AdmissionSectionAllotmentController;
Use App\Http\Controllers\LibraryPublisherDetailsController;
Use App\Http\Controllers\LibraryBookRegisterController;
Use App\Http\Controllers\LibraryBookRecordController;
Use App\Http\Controllers\LibraryBookRemoveController;
Use App\Http\Controllers\LibraryBookAllotmentController;
Use App\Http\Controllers\LibraryFineController;
Use App\Http\Controllers\LibraryHistoryController;
Use App\Http\Controllers\LibraryAademicBookAllotmentReturnController;
Use App\Http\Controllers\LibraryAcademicFineController;
Use App\Http\Controllers\LibraryHistoryAcademicController;
Use App\Http\Controllers\RollNumberAsignController;
Use App\Http\Controllers\SmsAllStudentController;
Use App\Http\Controllers\SmsBirthdayController;
Use App\Http\Controllers\SmsAccountSectionController;
Use App\Http\Controllers\AssignPrivellegeWorkingEmployeeController;
Use App\Http\Controllers\PrivilegeController;
Use App\Http\Controllers\FeeCollectionController;
Use App\Http\Controllers\FeeAcademicChequeController;
Use App\Http\Controllers\FeeTransportChequeController;
Use App\Http\Controllers\FeeEditInstallmentController;
Use App\Http\Controllers\FeePaymentHistoryController;
Use App\Http\Controllers\FeeDuplicateReceiptController;
Use App\Http\Controllers\FeeDiscountApprovalController;
Use App\Http\Controllers\FeeDiscountDeclineController;
Use App\Http\Controllers\FeeDiscountHistoryController;
Use App\Http\Controllers\HumanResourceEmployeeApprovalController;
Use App\Http\Controllers\HumanResourceRegisterEmployeeController;
Use App\Http\Controllers\StudentAttendanceController;
Use App\Http\Controllers\ActiveLogController;
Use App\Http\Controllers\TeacherClassAssignPriController;
Use App\Http\Controllers\HumanResourceEmployeeAttendanceController;
Use App\Http\Controllers\HumanResourceLoanApplyController;
Use App\Http\Controllers\HumanResourceSalaryViewController;
Use App\Http\Controllers\HumanResourceEmpSalUpdateController;
Use App\Http\Controllers\HumanResourceSalaryCertificateController;
Use App\Http\Controllers\HumanResourceAdvanceLoanController;
Use App\Http\Controllers\HumanResourcePfLoanController;
Use App\Http\Controllers\HumanResourceWorkingOffSttController;
Use App\Http\Controllers\HumanResourceWorkingSupSttController;
Use App\Http\Controllers\HumanResourceExOffSttController;
Use App\Http\Controllers\HumanResourceExSupSttController;
Use App\Http\Controllers\SettingController;
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
Route::group(['prefix'=>'/admission'], function(){
    Route::get('/view_enquiry',[AdmissionViewEnquiryController::class,'view'])->name('admission.view.enquiry');
Route::get('/view_enquiry_underprocess',[AdmissionViewEnquiryUnderProcessController::class,'view'])->name('admission.view.enquiry.underprocess');
Route::get('/view_enquiry_disqualified',[AdmissionViewDisQualifiedEnquiryController::class,'view'])->name('admission.view.enquiry.disqualified');
Route::get('/enquiry_approval_details',[AdmissionEnquiryApprovalDetailsController::class,'view'])->name('admission.enquiry.approval.details');
Route::get('/enquiry_approval_history',[AdmissionEnquiryApprovalHistoryController::class,'view'])->name('admission.enquiry.approval.history');
Route::get('/direct_registration',[AdmissionDirectRegistrationController::class,'view'])->name('direct.registration');
Route::get('/registration-underprocess',[AdmissionDirectRegistrationController::class,'view'])->name('registration.underprocess');
Route::get('/registration-history',[AdmissionRegistrationHistoryController::class,'view'])->name('registration.history');
Route::get('/registration-decline',[AdmissionRegistrationdeclinedController::class,'view'])->name('registration.declined');
Route::get('/registration-approval-section',[AdmissionRegistrationApprovalSectionController::class,'view'])->name('registration.approval.section');
Route::get('/registration-approval-history',[AdmissionRegistrationApprovalHistoryController::class,'view'])->name('registration.approval.history');
Route::get('/awaiting-admission',[AdmissionAwaitingController::class,'view'])->name('awaiting.admission');
Route::get('/fast-admission',[AdmissionFastAdmissionController::class,'view'])->name('fast.admission');
Route::get('/history-admission',[AdmissionHistoryController::class,'view'])->name('history.admission');
Route::get('/pending-document',[AdmissionDocumentPendingController::class,'view'])->name('pending.document');
Route::get('/student_upgrade',[AdmissionStudentUpgradeController::class,'view'])->name('student.upgrade');
Route::get('/update-admission',[AdmissionUpdateController::class,'view'])->name('update.admission');
Route::get('/section-allotment',[AdmissionSectionAllotmentController::class,'view'])->name('section.allotment');
});
Route::group(['prefix'=>'/library'], function(){
    Route::get('/publisher_details',[LibraryPublisherDetailsController::class,'view'])->name('library.publish.details');
    Route::get('/book_register',[LibraryBookRegisterController::class,'view'])->name('library.book.register');
    Route::get('/book_record',[LibraryBookRecordController::class,'view'])->name('library.book.record');
    Route::get('/book_remove',[LibraryBookRemoveController ::class,'view'])->name('library.book.remove');
    Route::get('/book_allotment',[LibraryBookAllotmentController::class,'view'])->name('library.book.allotment');
    Route::get('/paid_fine',[LibraryFineController::class,'view'])->name('library.paid.fine');
    Route::get('/history-library',[LibraryHistoryController::class,'view'])->name('library.history');
    Route::get('/academic-book-allotmet',[LibraryAademicBookAllotmentReturnController::class,'view'])->name('library.academic.book.allotment');
    Route::get('/academic-fine',[LibraryAcademicFineController::class,'view'])->name('library.academic.fine');
    Route::get('/academic-library-history',[LibraryHistoryAcademicController::class,'view'])->name('library.academic.library.history');
});
Route::group(['prefix'=>'/roll-number'], function(){
    Route::get('/asign-roll-number',[RollNumberAsignController::class,'view'])->name('rollnumber.asign');
});
Route::group(['prefix'=>'/sms'], function(){
    Route::get('/all-student-send-sms',[SmsAllStudentController::class,'view'])->name('sms.allstudent');
    Route::get('/birthday-student-send-sms',[SmsBirthdayController::class,'view'])->name('sms.birthday');
    Route::get('/account-section-sms',[SmsAccountSectionController::class,'view'])->name('sms.account.section');
});
Route::group(['prefix'=>'/assign-privellege'], function(){
    Route::get('/working-employee',[AssignPrivellegeWorkingEmployeeController::class,'view'])->name('ass.pri.working.employee');
    Route::get('/ex-employee',[AssignPrivellegeExEmployeeController::class,'view'])->name('ass.pri.ex.employee');
});
Route::group(['prefix'=>'/privellege'], function(){
    Route::get('/working-employee',[AssignPrivellegeWorkingEmployeeController::class,'view'])->name('ass.pri.working.employee');
    Route::get('/show_privilege',[PrivilegeController::class,'view'])->name('show.privilege');
});
Route::group(['prefix'=>'/fee'], function(){
    Route::get('/pay-fee-list',[FeeCollectionController::class,'view'])->name('pay.fee.list');
    Route::get('/academic_cheque_payment',[FeeAcademicChequeController::class,'view'])->name('academic.cheque.payment');
    Route::get('/transport_cheque_payment',[FeeTransportChequeController::class,'view'])->name('transport.cheque.payment');
    Route::get('/edit-installment',[FeeEditInstallmentController::class,'view'])->name('edit.installment');
    Route::get('/payment-history',[FeePaymentHistoryController::class,'view'])->name('fee.payment.history');
    Route::get('/fee-duplicate-receipt',[FeeDuplicateReceiptController::class,'view'])->name('fee.duplicate.receipt');
    Route::get('/fee-discount-approval',[FeeDiscountApprovalController::class,'view'])->name('fee.discount.approval');
    Route::get('/fee-discount-decline',[FeeDiscountDeclineController::class,'view'])->name('fee.discount.decline');
    Route::get('/fee-discount-history',[FeeDiscountHistoryController::class,'view'])->name('fee.discount.history');
});
Route::group(['prefix'=>'/human-resource'], function(){
    Route::get('/employee-approval',[HumanResourceEmployeeApprovalController::class,'view'])->name('human.employee.approval');
     Route::get('/employee-register',[HumanResourceRegisterEmployeeController::class,'view'])->name('human.employee.register');
    Route::get('/employee-attendance',[HumanResourceEmployeeAttendanceController::class,'view'])->name('human.employee.attendance');
    Route::get('/loan-apply',[HumanResourceLoanApplyController::class,'view'])->name('human.loan.apply');
    Route::get('/salary-view',[HumanResourceSalaryViewController::class,'view'])->name('human.salary.view');
    Route::get('/emp-salary-update',[HumanResourceEmpSalUpdateController::class,'view'])->name('human.emp.salary.update');
    Route::get('/salary-certificate',[HumanResourceSalaryCertificateController::class,'view'])->name('human.salary.certificate');
    Route::get('/advance-loan',[HumanResourceAdvanceLoanController::class,'view'])->name('human.advance.loan');
    Route::get('/pf-loan',[HumanResourcePfLoanController::class,'view'])->name('human.pf.loan');
    Route::get('/working-official_staff',[HumanResourceWorkingOffSttController::class,'view'])->name('human.working.official.staff');
    Route::get('/working-suport_staff',[HumanResourceWorkingSupSttController::class,'view'])->name('human.working.suport.staff');
    Route::get('/ex-official_staff',[HumanResourceExoffSttController::class,'view'])->name('human.ex.official.staff');
    Route::get('/ex-suport_staff',[HumanResourceExSupSttController::class,'view'])->name('human.ex.suport.staff');
});
Route::group(['prefix'=>'/student-atendance'], function(){
    Route::get('/student-atendance',[StudentAttendanceController::class,'view'])->name('student.attendance');
});
Route::group(['prefix'=>'/active-log'], function(){
    Route::get('active-log',[ActiveLogController::class,'view'])->name('active.log');
});
Route::group(['prefix'=>'/teacher-class-assign'], function(){
    Route::get('teacher-class-assign-primary',[TeacherClassAssignPriController::class,'view'])->name('teacher.class.assign.primary');
});
Route::group(['prefix'=>'/setting'], function(){
    Route::get('setting',[SettingController::class,'view'])->name('setting');
});
// Route::get('/admission/view_enquiry',[AdmissionViewEnquiryController::class,'view'])->name('admission.view.enquiry');
// Route::get('/admission/view_enquiry_underprocess',[AdmissionViewEnquiryUnderProcessController::class,'view'])->name('admission.view.enquiry.underprocess');
// Route::get('/admission/view_enquiry_disqualified',[AdmissionViewDisQualifiedEnquiryController::class,'view'])->name('admission.view.enquiry.disqualified');
// Route::get('/admission/enquiry_approval_details',[AdmissionEnquiryApprovalDetailsController::class,'view'])->name('admission.enquiry.approval.details');
// Route::get('/admission/enquiry_approval_history',[AdmissionEnquiryApprovalHistoryController::class,'view'])->name('admission.enquiry.approval.history');
// Route::get('/admission/direct_registration',[AdmissionDirectRegistrationController::class,'view'])->name('adm.d');

