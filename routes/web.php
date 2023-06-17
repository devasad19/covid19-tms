<?php

use Illuminate\Support\Facades\Route;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('logout2', [App\Http\Controllers\Auth\LoginController::class, 'getLogout']);
 

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/user/vaccine-registration', [App\Http\Controllers\DashboardController::class, 'vaccineReg'])->name('user.vaccineReg');
    Route::get('/user/vaccine-registration/step/{id}', [App\Http\Controllers\DashboardController::class, 'vaccineRegStep2'])->name('user.vaccineRegStep2');
    Route::get('/user/vaccine-registered', [App\Http\Controllers\DashboardController::class, 'vaccineRegistered'])->name('user.vaccineRegistered');
    Route::post('/user/vaccine-register', [App\Http\Controllers\DashboardController::class, 'vaccineregi1St'])->name('user.vaccineregi1St');
    Route::post('/user/registation', [App\Http\Controllers\DashboardController::class, 'userVaccineRegister'])->name('user.userVaccineRegister');
    Route::get('/admin/new-patients', [App\Http\Controllers\DashboardController::class, 'adminNewPatientsList'])->name('admin.new_patients_list');
    Route::get('/admin/add-phlebotomist', [App\Http\Controllers\DashboardController::class, 'addPhlebotomist'])->name('admin.addPhlebotomist');
    Route::post('/admin/store-staff', [App\Http\Controllers\DashboardController::class, 'storePhlebotomist'])->name('admin.storePhlebotomist');
    Route::get('/admin/manage-staff', [App\Http\Controllers\DashboardController::class, 'manageStaff'])->name('admin.manageStaff');
    Route::post('/admin/assing-to-plhebotomist', [App\Http\Controllers\DashboardController::class, 'assingToPhlebotomist'])->name('admin.assingToPhlebotomist');
    Route::post('/user/update-status', [App\Http\Controllers\DashboardController::class, 'phlebotomistStatusUpdate'])->name('user.phlebotomistStatusUpdate');
    Route::post('/user/report-deliveriable', [App\Http\Controllers\DashboardController::class, 'reportStatusUpdate'])->name('user.reportStatusUpdate');
    Route::get('/admin/assinged-plhebotomist', [App\Http\Controllers\DashboardController::class, 'assingedPlhebotomist'])->name('admin.assingedPlhebotomist');
    Route::get('/admin/assinged-specialist', [App\Http\Controllers\DashboardController::class, 'assingedSpecialist'])->name('admin.assingedSpecialist');
    Route::get('/admin/report-deliveriable', [App\Http\Controllers\DashboardController::class, 'reportDeliveriableList'])->name('admin.reportDeliveriableList');
    Route::get('/plhebotomist/patient-list', [App\Http\Controllers\DashboardController::class, 'plhebotomistPatienList'])->name('plhebotomist.plhebotomistPatienList');
    Route::post('/specialist/upload-report', [App\Http\Controllers\DashboardController::class, 'uploadReportFile'])->name('staff.uploadReportFile');
    Route::post('/plhebotomist/upload-collected-sample', [App\Http\Controllers\DashboardController::class, 'uploadCollectedSample'])->name('staff.uploadCollectedSample');
    Route::get('/user/show-details', [App\Http\Controllers\DashboardController::class, 'showRegDetails'])->name('user.showRegDetails');
    Route::get('/user/test-track', [App\Http\Controllers\DashboardController::class, 'userTestHistory'])->name('user.userTestHistory');
    Route::get('/user/report-download', [App\Http\Controllers\DashboardController::class, 'getReportDownload'])->name('user.getReportDownload');
    Route::get('/user/download-test-report/{id}', [App\Http\Controllers\DashboardController::class, 'downloadTestReport'])->name('user.downloadTestReport');
    Route::get('/user/fees-payment', [App\Http\Controllers\DashboardController::class, 'userFeePayment'])->name('user.userFeePayment');

});






