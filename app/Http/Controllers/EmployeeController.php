<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\User; 
use Illuminate\Support\Str;
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
        $data['roles'] = roles::where('status', '=', 1)->latest()->get();

        return view('Admin.createemp',$data);
    }
 
    public function Addemp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'mobile' => 'required|numeric|digits:10',
            'password' => 'required|min:5',
            'role' => 'required',
            'address' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // Validation passed, insert data into the users table
   
            $user = new UserModel();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->mobile = $request->input('mobile');
            $user->password = bcrypt($request->input('password')); // Hash the password
            $user->role_id = $request->input('role');
            $user->address = $request->input('address');
    
            // Generate a unique filename for the uploaded file
            $filename = Str::uuid() . '.' . $request->file('image')->getClientOriginalExtension();
    
            // Store the file in the 'icons' directory under the 'public' disk
            $iconPath = $request->file('image')->storeAs('icons', $filename, 'public');
            $user->icon = $filename;
    
            // Save the user
            if($user->save()){
            // Redirect with success message
            return redirect()->route('employee')->with('success', 'User added successfully');
            }else{
                
            return redirect()->route('employee')->with('error', 'User not added');
            }
        }
    }
}
