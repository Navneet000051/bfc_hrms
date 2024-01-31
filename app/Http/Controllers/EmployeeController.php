<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use App\Models\roles;
class EmployeeController extends Controller
{
    public function Dashboard(){
        return view('Employee.employee-dashboard');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        Session::flash('success', 'Logout successfully.');
        return redirect()->route('login');
    }

    public function employeeprofile(){
        return view('Employee.profile');
    }
    public function Showemp(Request $request)
    {
        // dd(DB::table('users')->select('*')->get());
        if ($request->ajax()) {
            $data = DB::table('users')->select('*')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action',])
                ->make(true);
        }
       $data['roles'] = roles::where('status','=',1)->latest();
        return view('Admin.createemp',$data);
    }
    public function Addemp(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required',
            'email' => 'required|unique:users',
            'mobile' => 'required|numeric|digits:10', // Assuming 10-digit numeric mobile number
            'password' => 'required|min:6',
            'role' => 'required',
            'address' => 'required',
            'icon' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();

        }
        else{
            echo 2;
        }
        

    }
}
