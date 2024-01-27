<?php

namespace App\Helpers;

use App\Models\RolePermission;

class SideMenusHelper
{
    public static function getSideMenu($roleId)
    {
        // Fetch all menu data for parent menus
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
    }
}
