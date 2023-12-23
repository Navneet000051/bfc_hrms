<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\Datatables;
use App\Models\roles;

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

    public function adminprofile(){
        return view('Admin.adminprofile');
    }
    public function createemp(Request $request){
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
    
        return view('Admin.createemp');
    }
    public function createclient(Request $request){
        if($request->ajax()){
            $data = DB::table('users')->select('*')->get();
            return Datatables::of($data)
            ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    $actionBtn = '<h2 class="table-avatar">
                    <a href="client-profile.html" class="avatar"><img src="assets/img/profiles/avatar-19.jpg" alt="User Image"></a>
                    <a href="client-profile.html">Global Technologies</a>
                </h2>';
                    return $actionBtn;
                })
                ->addColumn('clientid', function ($row) {
                    $actionBtn = 'CLT-0001';
                    return $actionBtn;
                })
                ->addColumn('cperson', function ($row) {
                    $actionBtn = 'Barry Cuda';
                    return $actionBtn;
                })
                ->addColumn('mobile', function ($row) {
                    $actionBtn = '9876543210';
                    return $actionBtn;
                })
                ->addColumn('status', function ($row) {
                    $actionBtn = '<div class="dropdown action-label">
                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                    </div>
                </div>';
                    return $actionBtn;
                })
              
                ->addColumn('action', function ($row) {
                    $actionBtn = '<div class="dropdown dropdown-action">
                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                    </div>
                </div>';
                    return $actionBtn;
                })
                ->rawColumns(['name','clientid','cperson','mobile','status','action'])
                ->make(true);
        }

        return view('Admin.createclient');
    }
    public function roles(){
        return view('Admin.manage-roles');
    }
    public function AddRole(Request $request){

        // dd($request->all());
        $roles = new roles;
        $roles->name = $request->roles;
        $roles->status = true;
        $roles->created_at = now();
        $roles->updated_at = now();
        $roles->save();

        // return view('Admin.manage-roles');
    }
}
