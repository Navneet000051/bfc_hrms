<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\Datatables;
use App\Models\roles;
use App\Models\Menu;
use Illuminate\Support\Facades\View;
use App\Models\rolePermission;
use App\Helpers\MenusHelper;
use App\Helpers\rolePermissionHelper;
use App\Helpers\sideMenusHelper;
use App\Helpers\LogActivityHelper;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
// use MenusHelper;

class AdminController extends Controller
{
    public function errorPage()
    {
        return view('admin.error');
    }
    public function Dashboard()
    {
        $routeName = Route::currentRouteName();
        // var_dump($routeName);
        // dd(Auth::id());
        return view('Admin.admin-dashboard');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        Session::flash('success', 'Logout successfully.');
        return redirect()->route('login');
    }

    public function adminprofile(Request $request)
    {
        if (!empty($request->id)) {
            $request->validate([
                'mobile' => 'required|numeric|digits_between:1,10',
                'email' => 'required|email',
                'address' => 'required|string',
            ]);
            $user = auth()->user();

            // Update user details
            $user->mobile = $request->input('mobile');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->save();

            // Redirect back or wherever you want
            return redirect()->back()->with('success', 'Profile updated successfully');
        } elseif (!empty($request->icon)) {
            $request->validate([
                'icon' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ]);

            $user = auth()->user();

            if ($request->hasFile('icon')) {
                // Delete the old image if it exists
                if ($user->icon) {
                    // Storage::delete($user->icon);
                    Storage::disk('public')->delete($user->icon);
                }
                $imagePath = $request->file('icon')->store('admin', 'public');
                // Remove the "admin/" prefix before saving in the database
                // $imagePath = str_replace('admin/', '', $imagePath);
                // dd($imagePath);
                $user->icon = $imagePath;

                if ($user->save()) {
                    Session::flash('success', 'Image updated successfully');
                } else {
                    Session::flash('error', 'Image not updated ');
                }
            } else {
                // Debugging: Check if the 'icon' file is present in the request

                Session::flash('success', 'No file provided in the request.');
            }
        }

        return view('Admin.adminprofile');
    }
    public function changePasswordShow()
    {
        return view('Admin.change-password');
    }
    public function changePassword(Request $request)
    {
        // Validate the request data, including the 'confirmed' rule for 'new-password'
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required',
            'password_confirmation' => 'required|same:new-password',
        ]);
        // Check if the current password matches the authenticated user's password
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The current password does not match
            return redirect()->back()->with("error", "Your current password does not match with the password.");
        }
        // Check if the new password is the same as the current password
        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Current password and new password are the same
            return redirect()->back()->with("error", "New Password cannot be the same as your current password.");
        }


        // Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        LogActivityHelper::addToLog('Do Password change');
        // Save the user and check if the save operation was successful
        if ($user->save()) {
            
            return redirect()->back()->with("success", "Password successfully changed!");
        } else {
            // Handle the case where the save operation fails
            return redirect()->back()->with("error", "Failed to change the password. Please try again.");
        }
    }
    //get emabedurl
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

    public function roles(Request $request, $id = '')
    {
        $data['getMenu'] = Menu::latest()->get();
        if ($id) {

            $data['action'] = 'EditRole';
            $data['roles'] = roles::find($id);
            return view('Admin.modal', $data);
        }

        $tableName = (new roles)->getTable();
        if ($request->ajax()) {
            $data = roles::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) use ($tableName) {
                    if ($row->status == 1) {
                        $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-regular fa-circle-dot text-success"></i> Active </a>';
                    } else {
                        $statusBtn = '<a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle show" data-bs-toggle="dropdown" aria-expanded="true"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive </a>';
                    }

                    $statusBtn .= '<div class="dropdown-menu">
                    <a class="dropdown-item" onclick="changeStatus(\'id\', \'' . $row->id . '\', \'status\', \'1\', \'' . $tableName . '\')"><i class="fa-regular fa-circle-dot text-success"></i> Active</a>
                    <a class="dropdown-item" onclick="changeStatus(\'id\', \'' . $row->id . '\', \'status\', \'0\', \'' . $tableName . '\')"><i class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                </div>';
                    return $statusBtn;
                })
                ->addColumn('action', function ($row) use ($tableName) {
                    $encryptedId = encrypt($row->id);
                    $actionBtn = '<li class="d-inline-flex">
                            <a class="EditPermission" onclick="showEdit(' . $row->id . ')">
                                <i class="fe fe-edit action-btn fs-6"></i>
                            </a> &nbsp;&nbsp;
                        <a class="DeletePermission" onclick="deleteData(\'id\',' . $row->id . ', \'' . $tableName . '\')">
                            <i class="fe fe-trash-2 action-btn fs-6"></i>
                        </a> &nbsp;&nbsp;';

                    // Handle the condition outside the string concatenation
                    if ($row->status == 1) {
                        $actionBtn .= '<a href="' . route('menuPermission', ['roleid' => $encryptedId]) . '"><i class="fe fe-eye action-btn"></i> </a> &nbsp;&nbsp;';
                    }

                    $actionBtn .= '</li>';

                    return $actionBtn;
                })


                ->rawColumns(['status', 'action'])
                ->make(true);
        }
        return view('Admin.manage-roles');
    }
    public function AddRole(Request $request)
    {
        if (!empty($request->id)) {

            $id = $request->id;
            $validator = Validator::make($request->all(), [
                'roles' => 'required|unique:roles,name,' . $id,

            ]);

            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', $validator->errors()->first('roles'));
            }
            if ($validator->passes()) {
                $roles = roles::find($id);
                $roles->name = $request->roles;
                $roles->updated_at = now();

                if ($roles->save()) {
                    LogActivityHelper::addToLog('Role Update');
                    return redirect('roles')->with('success', 'Data updated successfully');
                } else {
                    return redirect('roles')->with('Error', 'Data not updated');
                }
            }
        }
        $validator = Validator::make($request->all(), [
            'roles' => 'required|unique:roles,name,',

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $validator->errors()->first('roles'));
        }
        if ($validator->passes()) {
            $roles = new roles;
            $roles->name = $request->roles;
            $roles->status = true;
            $roles->created_at = now();
            $roles->updated_at = now();
            if ($roles->save()) {
                LogActivityHelper::addToLog('Role Update');
                return redirect('roles')->with('success', 'Data save successfully');
            } else {
                return redirect('roles')->with('Error', 'Data not saved');
            }
        }
    }

    public function menuPermission(Request $request, $roleid = 0)
    {
        $data['role_id'] = decrypt($roleid);
        $data['tableName'] = (new Menu)->getTable();
        // $helperfunction1_res1 = MenusHelper::getMenuHierarchies();
        // $data['menus1'] = $helperfunction1_res1;
        $helperfunction1_res = MenusHelper::getMenuHierarchiesWithPermissions(decrypt($roleid));
        $data['menus'] = $helperfunction1_res;

        return view('Admin.menu-permission', $data);
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

        $updatedMenus = MenusHelper::getMenuHierarchiesWithPermissions($roleId);

        // Initialize the table body HTML
        $tbodyHtml = '';
        $sr = 1;

        // Loop through the updated menus to generate table rows
        foreach ($updatedMenus as $menu) {
            // Display parent menu data
            $tbodyHtml .= '<tr>';
            $tbodyHtml .= '<td>' . $sr++ . '</td>';
            $tbodyHtml .= '<td>' . $menu->name . '</td>';
            $tbodyHtml .= '<td></td>';
            $tbodyHtml .= '<td></td>';
            $tbodyHtml .= '<td class="text-center" data-type="menu_status">
                    <label class="custom_check">
                        <input name="menustatus" type="checkbox" ' . ($menu->menu_status == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $menu->id . '\',\'' . $menu->parent_id . '\',\'' . $menu->subparent_id . '\',\'' . $roleId . '\',\'type\')">
                        <span class="checkmark"></span>
                    </label>
                </td>';
            $tbodyHtml .= '<td class="text-center" data-type="add">
                    <label class="custom_check">
                        <input name="addstatus" type="checkbox" ' . ($menu->add == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $menu->id . '\',\'' . $menu->parent_id . '\',\'' . $menu->subparent_id . '\',\'' . $roleId . '\',1)">
                        <span class="checkmark"></span>
                    </label>
                </td>';
            $tbodyHtml .= '<td class="text-center" data-type="edit">
                    <label class="custom_check">
                        <input name="editstatus" type="checkbox" ' . ($menu->edit == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $menu->id . '\',\'' . $menu->parent_id . '\',\'' . $menu->subparent_id . '\',\'' . $roleId . '\',1)">
                        <span class="checkmark"></span>
                    </label>
                </td>';
            $tbodyHtml .= '<td class="text-center" data-type="view">
                    <label class="custom_check">
                        <input name="viewstatus" type="checkbox" ' . ($menu->view == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $menu->id . '\',\'' . $menu->parent_id . '\',\'' . $menu->subparent_id . '\',\'' . $roleId . '\',1)">
                        <span class="checkmark"></span>
                    </label>
                </td>';
            $tbodyHtml .= '<td class="text-center" data-type="delete">
                    <label class="custom_check">
                        <input name="deletestatus" type="checkbox" ' . ($menu->delete == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $menu->id . '\',\'' . $menu->parent_id . '\',\'' . $menu->subparent_id . '\',\'' . $roleId . '\',1)">
                        <span class="checkmark"></span>
                    </label>
                </td>';
            $tbodyHtml .= '</tr>';

            // Display main menu data
            if ($menu->status == 1) {
                foreach ($menu->mainmenus as $mainMenu) {
                    $tbodyHtml .= '<tr>';
                    $tbodyHtml .= '<td>' . $sr++ . '</td>';
                    $tbodyHtml .= '<td>' . $menu->name . '</td>';
                    $tbodyHtml .= '<td>' . $mainMenu->name . '</td>';
                    $tbodyHtml .= '<td></td>';
                    $tbodyHtml .= '<td class="text-center" data-type="menu_status">
            <label class="custom_check">
                <input name="menustatus" type="checkbox" ' . ($mainMenu->menu_status == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $mainMenu->id . '\',\'' . $mainMenu->parent_id . '\',\'' . $mainMenu->subparent_id . '\',\'' . $roleId . '\')">
                <span class="checkmark"></span>
            </label>
        </td>';
                    $tbodyHtml .= '<td class="text-center" data-type="add">
            <label class="custom_check">
                <input name="addstatus" type="checkbox" ' . ($mainMenu->add == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $mainMenu->id . '\',\'' . $mainMenu->parent_id . '\',\'' . $mainMenu->subparent_id . '\',\'' . $roleId . '\',1)">
                <span class="checkmark"></span>
            </label>
        </td>';
                    $tbodyHtml .= '<td class="text-center" data-type="edit">
            <label class="custom_check">
                <input name="editstatus" type="checkbox" ' . ($mainMenu->edit == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $mainMenu->id . '\',\'' . $mainMenu->parent_id . '\',\'' . $mainMenu->subparent_id . '\',\'' . $roleId . '\',1)">
                <span class="checkmark"></span>
            </label>
        </td>';
                    $tbodyHtml .= '<td class="text-center" data-type="view">
            <label class="custom_check">
                <input name="viewstatus" type="checkbox" ' . ($mainMenu->view == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $mainMenu->id . '\',\'' . $mainMenu->parent_id . '\',\'' . $mainMenu->subparent_id . '\',\'' . $roleId . '\',1)">
                <span class="checkmark"></span>
            </label>
        </td>';
                    $tbodyHtml .= '<td class="text-center" data-type="delete">
            <label class="custom_check">
                <input name="deletestatus" type="checkbox" ' . ($mainMenu->delete == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $mainMenu->id . '\',\'' . $mainMenu->parent_id . '\',\'' . $mainMenu->subparent_id . '\',\'' . $roleId . '\',1)">
                <span class="checkmark"></span>
            </label>
        </td>';
                    $tbodyHtml .= '</tr>';

                    // Display submenu data
                    if ($mainMenu->status == 1) {
                        foreach ($mainMenu->submenus as $submenu) {
                            $tbodyHtml .= '<tr>';
                            $tbodyHtml .= '<td>' . $sr++ . '</td>';
                            $tbodyHtml .= '<td>' . $menu->name . '</td>';
                            $tbodyHtml .= '<td>' . $mainMenu->name . '</td>';
                            $tbodyHtml .= '<td>' . $submenu->name . '</td>';
                            $tbodyHtml .= '<td class="text-center" data-type="menu_status">
                        <label class="custom_check">
                            <input name="menustatus" type="checkbox" ' . ($submenu->menu_status == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $submenu->id . '\',\'' . $submenu->parent_id . '\',\'' . $submenu->subparent_id . '\',\'' . $roleId . '\',\'type\')">
                            <span class="checkmark"></span>
                        </label>
                    </td>';
                            $tbodyHtml .= '<td class="text-center" data-type="add">
                        <label class="custom_check">
                            <input name="addstatus" type="checkbox" ' . ($submenu->add == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $submenu->id . '\',\'' . $submenu->parent_id . '\',\'' . $submenu->subparent_id . '\',\'' . $roleId . '\',1)">
                            <span class="checkmark"></span>
                        </label>
                    </td>';
                            $tbodyHtml .= '<td class="text-center" data-type="edit">
                        <label class="custom_check">
                            <input name="editstatus" type="checkbox" ' . ($submenu->edit == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $submenu->id . '\',\'' . $submenu->parent_id . '\',\'' . $submenu->subparent_id . '\',\'' . $roleId . '\',1)">
                            <span class="checkmark"></span>
                        </label>
                    </td>';
                            $tbodyHtml .= '<td class="text-center" data-type="view">
                        <label class="custom_check">
                            <input name="viewstatus" type="checkbox" ' . ($submenu->view == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $submenu->id . '\',\'' . $submenu->parent_id . '\',\'' . $submenu->subparent_id . '\',\'' . $roleId . '\',1)">
                            <span class="checkmark"></span>
                        </label>
                    </td>';
                            $tbodyHtml .= '<td class="text-center" data-type="delete">
                        <label class="custom_check">
                            <input name="deletestatus" type="checkbox" ' . ($submenu->delete == 1 ? 'checked' : '') . ' onclick="menuStatus(this,\'' . $submenu->id . '\',\'' . $submenu->parent_id . '\',\'' . $submenu->subparent_id . '\',\'' . $roleId . '\',1)">
                            <span class="checkmark"></span>
                        </label>
                    </td>';
                            $tbodyHtml .= '</tr>';
                        }
                    }
                }
            }
        }
        // Update menu status

        return response()->json(['result' => $result['status'],  'table_html' => $tbodyHtml]);

        // return response()->json(['result' => $result['status']]);
    }

    public function menu(Request $request, $Id = 0, $parentId = '', $subparentId = '')
    {

        if (!empty($request->type) && $request->type == "delete") {
            // dd($request->all());

            if ($request->parentId == 0 && $request->subparentId == 0 && $request->Id > 0) {
                if (Menu::where('parent_id', $request->Id)->exists()) {
                    if (Menu::where('parent_id', $request->Id)->delete()) {
                        if (Menu::where('id', $request->Id)->delete()) {
                            return redirect('menu')->with('success', 'Data deleted successfully');
                        } else {
                            return redirect('menu')->with('error', 'Data not deleted');
                        }
                    } else {
                        return redirect('menu')->with('error', 'Data not deleted');
                    }
                } else {
                    if (Menu::where('id', $request->Id)->delete()) {
                        return redirect('menu')->with('success', 'Data deleted successfully');
                    } else {
                        return redirect('menu')->with('error', 'Data not deleted');
                    }
                }
            }
            if ($request->parentId > 0 && $request->subparentId == 0 && $request->Id > 0) {

                if (Menu::where('subparent_id', $request->Id)->exists()) {
                    if (Menu::where('subparent_id', $request->Id)->delete()) {
                        if (Menu::where('id', $request->Id)->delete()) {
                            return redirect('menu')->with('success', 'Data deleted successfully');
                        } else {
                            return redirect('menu')->with('error', 'Data not deleted');
                        }
                    } else {
                        return redirect('menu')->with('error', 'Submenu not deleted');
                    }
                } else {
                    if (Menu::where('id', $request->Id)->delete()) {
                        return redirect('menu')->with('success', 'Data deleted successfully');
                    } else {
                        return redirect('menu')->with('error', 'Data not deleted');
                    }
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

        $definedRoutes = MenusHelper::getDefinedRoutes();

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
                if ($definedRoutes->contains($menu->url)) {

                    if ($menu->save()) {
                        return redirect('menu')->with('success', 'Data save successfully');
                    } else {
                        return redirect('menu')->with('error', 'Data not saved');
                    }
                } else {
                    return redirect('menu')->with('error', 'Invalid url');
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
