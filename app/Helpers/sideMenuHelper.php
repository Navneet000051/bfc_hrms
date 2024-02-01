<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Route;
use App\Models\roles;
use Illuminate\Support\Facades\Auth;
use App\Models\RolePermission;

class SideMenusHelper
{
   
    public static function getSideMenu($roleId)
    { 
        $routeName = Route::currentRouteName();

        if (Auth::check()) {
            $roleId = Auth::user()->role_id;
        }
        
        $menus = RolePermission::leftJoin('menus', function ($join) use ($roleId) {
                $join->on('role_permissions.menuid', '=', 'menus.id')
                    ->where('role_permissions.roleid', '=', $roleId)
                    ->where('role_permissions.menu_status', '=', 1)
                    ->where('menus.status', '=', 1);
            })
            ->whereNotNull('menus.id')
            ->select(
                'menus.url',
                'role_permissions.add',
                'role_permissions.edit',
                'role_permissions.delete',
                'role_permissions.view',
            )
            ->get();
    
        $authorized = false;
        
        $actions = ['Add', 'Edit', 'Delete'];
        if(($routeName == 'dashboard') || ($routeName == 'menuPermission' && $roleId == 1)){
            $authorized = true; 
        }

        else{
            foreach ($menus as $menu) {
                if ($menu->url == $routeName) {
                    // If the route is authorized, set the flag to true
                    
                    $authorized = true;
                    break; // Exit the loop once a match is found
                }
                else{
                    foreach ($actions as $action) {
                        if ($action.$menu->url == $routeName) {
                            $authorized = true;
                            break; // Exit the loop once a match is found
                        }   
                    }
                }
            }
        }
    
        // Display the message based on the flag
        if ($authorized) {
            $parentMenus = RolePermission::leftJoin('menus', function ($join) use ($roleId) {
                $join->on('role_permissions.menuid', '=', 'menus.id')
                    ->where('role_permissions.roleid', '=', $roleId)
                    ->where('role_permissions.menu_status', '=', 1)
                    ->where('role_permissions.parentid', '=', 0)
                    ->where('role_permissions.subparentid', '=', 0)
                    ->where('menus.status', '=', 1);
            })
            ->whereNotNull('menus.id')
            ->select(
                'menus.id',
                'menus.name',
                'menus.url',
                'menus.icon',
                'role_permissions.parentid',
                'role_permissions.subparentid'
            )
            ->get();
    
            // Fetch submenu data for each parent menu
            foreach ($parentMenus as $parentMenu) {
                $parentMenu->submenu = RolePermission::leftJoin('menus', function ($join) use ($roleId, $parentMenu) {
                    $join->on('role_permissions.menuid', '=', 'menus.id')
                        ->where('role_permissions.roleid', '=', $roleId)
                        ->where('role_permissions.menu_status', '=', 1)
                        ->where('role_permissions.parentid', '=', $parentMenu->id) // Use the parent menu ID
                        ->where('role_permissions.subparentid', '=', 0)
                        ->where('menus.status', '=', 1);
                })
                ->whereNotNull('menus.id')
                ->select(
                    'menus.id',
                    'menus.name',
                    'menus.url',
                    'menus.icon',
                    'role_permissions.parentid',
                    'role_permissions.subparentid'
                )
                ->get();
    
                foreach ($parentMenu->submenu as $secondLevelMenu) {
                    $secondLevelMenu->submenu = RolePermission::leftJoin('menus', function ($join) use ($roleId, $secondLevelMenu) {
                        $join->on('role_permissions.menuid', '=', 'menus.id')
                            ->where('role_permissions.roleid', '=', $roleId)
                            ->where('role_permissions.menu_status', '=', 1)
                            ->where('role_permissions.parentid', '=', $secondLevelMenu->parentid) // Use the second-level menu ID
                            ->where('role_permissions.subparentid', '=', $secondLevelMenu->id) // Use the second-level menu ID
                            ->where('menus.status', '=', 1);
                    })
                    ->whereNotNull('menus.id')
                    ->select(
                        'menus.id',
                        'menus.name',
                        'menus.url',
                        'menus.icon',
                        'role_permissions.parentid',
                        'role_permissions.subparentid'
                    )
                    ->get();
                }
            }
    
            return $parentMenus;
        } else {
            // dd("Unauthorized user");
            abort(redirect('/dashboard')->with('error', 'Unauthorized access.'));
        }
}

}
