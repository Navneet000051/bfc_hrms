<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\changeStatusController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\smtpController;
use App\Models\roles;

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

// Route::get('/', function () {
//     return view('Admin.master');
// });
Route::middleware('admin.guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');

    Route::post('/', [AuthController::class, 'login'])->name('login');

    Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

    Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

    Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    
    Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});

Route::middleware('admin.auth')->group(function () {
    Route::get('/error', [AdminController::class, 'errorPage'])->name('error');

    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('dashboard');

    Route::get('/empdashboard', [EmployeeController::class, 'Dashboard'])->name('EmployeeDashboard');

    Route::get('/clientdashboard', [EmployeeController::class, 'Dashboard'])->name('ClientDashboard');

    Route::get('/registration', [AuthController::class, 'registration'])->name('registration');

    Route::post('/registration', [AuthController::class, 'regins'])->name('registration');

    Route::get('logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/adminprofile', [AdminController::class, 'adminprofile'])->name('adminprofile');

    Route::patch('/adminprofile', [AdminController::class, 'adminprofile'])->name('updateProfile');

    Route::post('/adminprofile', [AdminController::class, 'adminprofile'])->name('updateProfileImg');

    Route::get('/changePassword', [AdminController::class, 'changePasswordShow'])->name('changePassword');

    Route::put('/changePassword', [AdminController::class, 'changePassword'])->name('changePassword');

    Route::get('/createemp', [EmployeeController::class, 'Showemp'])->name('employee');

    Route::post('/createemp', [EmployeeController::class, 'Addemp'])->name('employee');

    Route::get('/createclient', [AdminController::class, 'createclient'])->name('client');

    Route::get('/roles', [AdminController::class, 'roles'])->name('roles');

    Route::post('/roles', [AdminController::class, 'AddRole'])->name('Addroles');

    Route::get('/roles/{id}', [AdminController::class, 'roles'])->name('Updateroles');

    Route::get('/menu', [AdminController::class, 'menu'])->name('menu');

    Route::post('/delmenu', [AdminController::class, 'menu'])->name('Deletemenu');

    Route::post('/menu', [AdminController::class, 'AddMenu'])->name('Addmenu');

    Route::get('/menu/{Id}/{parentId}/{subparentId}', [AdminController::class, 'menu'])->name('Editmenu');

    Route::get('/menuPermission/{roleid}', [AdminController::class, 'menuPermission'])->name('menuPermission');

    Route::post('/rolePermission', [AdminController::class, 'handleMenuStatus'])->name('rolePermission');

    Route::get('/getSubparentData/{parentId}', [AdminController::class, 'getSubparentData'])->name('getSubparentData');
    Route::post('/changeStatus', [changeStatusController::class, 'changeStatus'])->name('changeStatus');

    Route::delete('/deleteData', [DeleteController::class, 'destroy'])->name('DeleteData');

    Route::get('showmail',[MailController::class,'show'])->name('mail');

    Route::get('showmail/{id}',[MailController::class,'show'])->name('Editmail');

    Route::post('sendmail',[MailController::class,'send'])->name('Addmail');

    Route::get('showsmpt',[smtpController::class,'show'])->name('smtp');

    Route::get('showsmtp/{id}',[smtpController::class,'show'])->name('Editsmtp');

    Route::post('sendsmtp',[smtpController::class,'send'])->name('Addsmtp');
});
