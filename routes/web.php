<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\changeStatusController;
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
});

Route::middleware('admin.auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('dashboard');


    Route::get('/registration', [AuthController::class, 'registration'])->name('registration');

    Route::post('/registration', [AuthController::class, 'regins'])->name('registration');

    Route::get('logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/adminprofile', [AdminController::class, 'adminprofile'])->name('adminprofile');

    Route::get('/createemp',[AdminController::class,'createemp'])->name('employee');

    Route::get('/createclient',[AdminController::class,'createclient'])->name('client');


    Route::get('/roles',[AdminController::class,'roles'])->name('roles');

    Route::post('/roles',[AdminController::class,'AddRole'])->name('AddRole');
    
    Route::get('/menu',[AdminController::class,'menu'])->name('menu');

    Route::post('/menu',[AdminController::class,'AddMenu'])->name('AddMenu');

    Route::get('/menu/{Id}/{parentId}/{subparentId}', [AdminController::class, 'menu'])->name('EditMenu');
    

    Route::get('/getSubparentData/{parentId}',[AdminController::class,'getSubparentData'])->name('getSubparentData');
    Route::post('/changeStatus',[changeStatusController::class,'changeStatus'])->name('changeStatus');

}); 
