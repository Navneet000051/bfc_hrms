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
use App\Helpers\rolePermissionHelper;
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

    public function roles(Request $request, $id='')
    {
        $data['getMenu'] = Menu::latest()->get();
        $tableName = (new roles)->getTable();
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
                ->addColumn('action', function ($row) use ($tableName) {
                    $encryptedId = encrypt($row->id);
                    $actionBtn = '<li class="d-inline-flex">
                            <a onclick="showEdit(' . $row->id . ')">
                                <i class="fe fe-edit action-btn fs-6"></i>
                            </a> &nbsp;&nbsp;
                        <a onclick="deleteData(\'id\',' . $row->id . ', \'' . $tableName . '\')">
                            <i class="fe fe-trash-2 action-btn fs-6"></i>
                        </a> &nbsp;&nbsp;
                        <a href="' . route('menuPermission', ['roleid' => $encryptedId]) . '"><i class="fe fe-eye action-btn"></i> </a> &nbsp;&nbsp;
                        <a><i class="fe fe-plus-circle action-btn"></i></a>
                    </li> ';
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
        } else {
            return redirect('roles')->with('Error', 'Data not saved');
        }
    }

    public function menuPermission(Request $request, $roleid=0){
       
        $data['tableName'] = (new Menu)->getTable();
        // $helperfunction1_res1 = MenusHelper::getMenuHierarchies();
        // $data['menus1'] = $helperfunction1_res1;
        $helperfunction1_res = MenusHelper::getMenuHierarchiesWithPermissions();
        $data['menus'] = $helperfunction1_res;
        $data['role_id'] = decrypt($roleid);
        return view('Admin.menu-permission',$data);
    }
    public function handleMenuStatus(Request $request)
    { 
            $value = $request->value;
            $id = $request->id;
            $parentId = $request->parentId;
            $subparentId = $request->subparentId;
            $roleId = $request->roleId;
            $type = $request->type;
            $menustatus = $request->menustatus;

            $result = RolePermissionHelper::menuStatus($value, $id, $parentId, $subparentId, $roleId, $type, $menustatus);
             return response()->json(['result' => $result['status']]);
       
    }

        public function menu(Request $request, $Id = 0, $parentId = '', $subparentId = '')
    {

        if (!empty($request->type) && $request->type == "delete") {
            // dd($request->all());

            if ($request->parentId == 0 && $request->subparentId == 0 && $request->Id > 0) {
                if (Menu::where('parent_id', $request->Id)->delete()) {
                    if (Menu::where('id', $request->Id)->delete()) {
                            return redirect('menu')->with('success', 'Data deleted successfully');
                       
                    } else {
                        return redirect('menu')->with('error', 'Data not deleted');
                    }
                } else {
                    return redirect('menu')->with('error', 'Data not deleted');
                }
            }
            if ($request->parentId > 0 && $request->subparentId == 0 && $request->Id > 0) {
                if (Menu::where('subparent_id', $request->Id)->delete()) {
                    if (Menu::where('id', $request->Id)->delete()) {
                        return redirect('menu')->with('success', 'Data deleted successfully');
                    } else {
                        return redirect('menu')->with('error', 'Data not deleted');
                    }
                } else {
                    return redirect('menu')->with('error', 'Submenu not deleted');
                }
            }
            if ($request->parentId > 0 && $request->subparentId > 0 && $request->Id > 0) {
                if (Menu::where('parent_id', $request->parentId)->where('subparent_id', $request->subparentId)->where('id', $request->Id)->delete()) {
                    return redirect('menu')->with('success', 'Data deleted successfully');
                } else {
                    return redirect('menu')->with('error', 'Data not Deleted');
                }
            }
        } else {
            if ($parentId == 0 && $subparentId == 0 && $Id > 0) {
                $data['selectedmenu'] = Menu::where('parent_id', $parentId)->where('subparent_id', $subparentId)->where('id', $Id)->first();
            }
            if ($parentId > 0 && $subparentId == 0 && $Id > 0) {
                $data['selectedmenu'] = Menu::where('parent_id', $parentId)->where('subparent_id', $subparentId)->where('id', $Id)->first();
            }
            if ($parentId > 0 && $subparentId > 0 && $Id > 0) {
                $data['selectedmenu'] = Menu::join('menus as subparent', 'menus.subparent_id', '=', 'subparent.id')
                    ->where('menus.parent_id', $parentId)
                    ->where('menus.subparent_id', $subparentId)
                    ->where('menus.id', $Id)
                    ->select('menus.*', 'subparent.name as subparent_name')
                    ->first();
            }
        }
        $helperfunction1_res = MenusHelper::getMenuHierarchies();
        $data['menus'] = $helperfunction1_res;
        $data['tableName'] = (new Menu)->getTable();
        return view('Admin.manage-menu', $data);
    }
    public function AddMenu(Request $request)
    {
        //    dd($reques t->all());
        $menu = new Menu;
        if (($request->id != '') && ($request->pid != '') && ($request->sid != '')) {
            // dd('hii');
            $updatedata = [
                'name' => $request->name,
                'icon' => $request->icon,
                'url' => $request->url
            ];
            if (Menu::where('id', '!=', $request->id)->where('name', $request->name)->exists()) {
                return redirect('menu')->with('warning', 'Duplicate entry not allowed');
            } else {
                $affectedRows = Menu::where('id', $request->id)
                    ->where('parent_id', $request->pid)
                    ->where('subparent_id', $request->sid)
                    ->update($updatedata);
                if ($affectedRows > 0) {
                    return redirect('menu')->with('success', 'Data updated successfully');
                } else {
                    return redirect('menu')->with('error', 'Data not updated');
                }
            }
        } else {
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
            if ($request->parent == 0 && $subparent_id == 0) {

                if (Menu::where('parent_id', '!=', 0)->where('subparent_id', 0)->where('name', $request->name)->exists()) {
                    $getdata = Menu::where('parent_id', '!=', 0)->where('subparent_id', 0)->where('name', $request->name)->exists();
                } elseif (Menu::where('parent_id', '!=', 0)->where('subparent_id', '!=', 0)->where('name', $request->name)->exists()) {
                    $getdata = Menu::where('parent_id', '!=', 0)->where('subparent_id', '!=', 0)->where('name', $request->name)->exists();
                } elseif (Menu::where('parent_id', 0)->where('subparent_id', 0)->where('name', $request->name)->exists()) {

                    $getdata = Menu::where('parent_id', 0)->where('subparent_id', 0)->where('name', $request->name)->exists();
                } else {
                    $getdata = false;
                }
            }

            if ($request->parent != 0 && $subparent_id == 0) {
                if (Menu::where('parent_id', $request->parent)->where('subparent_id', 0)->where('name', $request->name)->exists()) {
                    echo 11;
                    $getdata = Menu::where('parent_id', $request->parent)->where('subparent_id', 0)->where('name', $request->name)->exists();
                } elseif (Menu::where('parent_id', 0)->where('name', $request->name)->exists()) {
                    echo 2;
                    $getdata = Menu::where('parent_id', 0)->where('name', $request->name)->exists();
                } elseif (Menu::where('parent_id', $request->parent)->where('subparent_id', '!=', 0)->where('name', $request->name)->exists()) {
                    echo 3;
                    $getdata =  $getdata = Menu::where('parent_id', $request->parent)->where('subparent_id', '!=', 0)->where('name', $request->name)->exists();
                } else {
                    $getdata = false;
                }
            }
            if ($request->parent != 0 && $subparent_id != 0) {

                if (Menu::where('parent_id', $request->parent)->where('subparent_id', $subparent_id)->where('name', $request->name)->exists()) {
                    $getdata = Menu::where('parent_id', $request->parent)->where('subparent_id', $subparent_id)->where('name', $request->name)->exists();
                } elseif (Menu::where('parent_id', $request->parent)->where('subparent_id', 0)->where('name', $request->name)->exists()) {
                    $getdata = Menu::where('parent_id', $request->parent)->where('subparent_id', 0)->where('name', $request->name)->exists();
                } elseif (Menu::where('parent_id', 0)->where('name', $request->name)->exists()) {
                    $getdata = Menu::where('parent_id', 0)->where('name', $request->name)->exists();
                } else {
                    $getdata = false;
                }
            }
            // dd($getdata);
            if ($getdata) {
                return redirect('menu')->with('error', 'Duplicate Entry not allowed');
            } else {
                if ($menu->save()) {
                    return redirect('menu')->with('success', 'Data save successfully');
                } else {
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

    // public function deleteMenu(request $request){
    //        if(Menu::where('parent_id')->delete()){

    //        }
    // }
}
