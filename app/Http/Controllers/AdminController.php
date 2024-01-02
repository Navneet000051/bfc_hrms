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
use App\Models\Menu;
use Illuminate\Support\Facades\View;

use App\Helpers\MenusHelper;
// use MenusHelper;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('Admin.admin-dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        Session::flash('success', 'Logout successfully.');
        return redirect()->route('login');
    }

    public function adminprofile()
    {
        return view('Admin.adminprofile');
    }
    public function createemp(Request $request) 
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

        return view('Admin.createemp');
    }
    public function createclient(Request $request)
    {
        if ($request->ajax()) {
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
                ->rawColumns(['name', 'clientid', 'cperson', 'mobile', 'status', 'action'])
                ->make(true);
        }

        return view('Admin.createclient');
    }
    public function roles(Request $request)
    {
        if ($request->ajax()) {
            $data = roles::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == 1) {
                        $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>';
                    } else {
                        $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>';
                    }

                    $statusBtn .= '<div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                    </div>';
                    return $statusBtn;
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

                ->rawColumns(['status', 'action'])
                ->make(true);
        }
        return view('Admin.manage-roles');
    }
    public function AddRole(Request $request)
    {

        // dd($request->all());
        $roles = new roles;
        $roles->name = $request->roles;
        $roles->status = true;
        $roles->created_at = now();
        $roles->updated_at = now();
        if ($roles->save()) {
            return redirect('roles')->with('success', 'Data save successfully');
        }
        else{
            return redirect('roles')->with('Error', 'Data not saved'); 
        }
    }

    public function menu(Request $request)
    {
        // if ($request->ajax())
        //  {

        //     $data = roles::latest()->get();
        //     return Datatables::of($data)
        //         ->addIndexColumn()
        //         ->addColumn('status', function($row){
        //             if ($row->status == 1) {
        //                 $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>';
        //             } else {
        //                 $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>';
        //             }

        //             $statusBtn .= '<div class="dropdown-menu">
        //                 <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
        //                 <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
        //             </div>';
        //             return $statusBtn;
        //         })
        //         ->addColumn('action', function($row){
        //             $actionBtn = '<div class="dropdown dropdown-action">
        //             <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
        //             <div class="dropdown-menu dropdown-menu-right">
        //                 <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_client"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
        //                 <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_client"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
        //             </div>
        //         </div>';
        //             return $actionBtn;
        //         })

        //         ->rawColumns(['status','action'])
        //         ->make(true);
        // }


        // $data['menus'] = Menu::where('parent_id', 0)->where('subparent_id', 0)->get();
        // foreach ($data['menus'] as $parentMenu) {
        //     $parentMenu->mainmenus = Menu::where('parent_id', $parentMenu->id)
        //         ->where('subparent_id', 0)
        //         ->get();

        //     foreach ($parentMenu->mainmenus as $mainMenu) {
        //         $mainMenu->submenus = Menu::where('parent_id',$mainMenu->parent_id)
        //             ->where('subparent_id',$mainMenu->id)
        //             ->get();
        //     }
        // }
        $helperfunction1_res = MenusHelper::getMenuHierarchies();
        // echo $helperfunction1_res; die; 
      //  return view('Admin.manage-menu')->with($data);
      $data['menus']=$helperfunction1_res;

        return view('Admin.manage-menu',$data);
    }
    public function AddMenu(Request $request)
    {

        //    dd($request->all());
        $menu = new Menu;

        $menu->parent_id = $request->parent;
        if ($request->subparent == null) {
            $subparent_id = 0;
            
        } else {
            $subparent_id = $request->subparent;
        }
        $menu->subparent_id = $subparent_id;
        $menu->label = $request->label;
        $menu->name = $request->name;
        $menu->icon = $request->icon;
        $menu->url = $request->url;
        $menu->status = true;
        $menu->created_at = now();
        $menu->updated_at = now();
        if($request->parent==0 && $subparent_id==0){
            $getdata = Menu::where('parent_id', 0)->where('subparent_id', 0)->exists();
            if($getdata)
            {
                if ($menu->save()) {
                    return redirect('menu')->with('success', 'Data save successfully');
                }
                else{
                    return redirect('menu')->with('error', 'Data not saved');
                }
            }
            
        }
       
    }
    public function getSubparentData($parentId)
    {
        // Use Eloquent to fetch subparent data based on the selected parent ID
        $subparentData = Menu::where('parent_id', $parentId)->where('subparent_id', 0)->get();
        return response()->json($subparentData);
    }
}
