<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\Datatables;
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
    public function createclient(){
        return view('Admin.createclient');
    }
}
