<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    public function Dashboard(){
        return view('Admin.admin-dashboard');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        Session::flash('success', 'Logout successfully.');
        return redirect()->route('login');
    }

    public function employeeprofile(){
        return view('Employee.profile');
    }
}
