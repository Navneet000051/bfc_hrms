<?php

namespace App\Helpers;

use App\Models\Menu;

use App\Models\RolePermission;

class MenusHelper
{
    public static function getMenuHierarchies()
    {
        $menus = Menu::where('parent_id', 0)->where('subparent_id', 0)->get();

        foreach ($menus as $parentMenu) {
            $parentMenu->mainmenus = Menu::where('parent_id', $parentMenu->id)
                ->where('subparent_id', 0)
                ->get();

            foreach ($parentMenu->mainmenus as $mainMenu) {
                $mainMenu->submenus = Menu::where('parent_id', $mainMenu->parent_id)
                    ->where('subparent_id', $mainMenu->id)
                    ->get();
            }
        }

        return $menus;
    }
    public static function getMenuHierarchiesWithPermissions()
    {
        $menuswithpermission = Menu::leftJoin('role_permissions', function ($join) {
            $join->on('menus.id', '=', 'role_permissions.menuid')
                ->where('role_permissions.parentid', '=', 0)
                ->where('role_permissions.subparentid', '=', 0);
        })
            ->where('menus.parent_id', 0)
            ->where('menus.subparent_id', 0)
            ->select(
                'menus.*',
                'role_permissions.menu_status',
                'role_permissions.add',
                'role_permissions.view',
                'role_permissions.edit',
                'role_permissions.delete'
            )
            ->get();

        foreach ($menuswithpermission as $parentMenu) {
            $parentMenu->mainmenus = Menu::leftJoin('role_permissions', function ($join) use ($parentMenu) {
                $join->on('menus.id', '=', 'role_permissions.menuid')
                    ->where('role_permissions.parentid', '=', $parentMenu->id)
                    ->where('role_permissions.subparentid', '=', 0);
            })
                ->where('menus.parent_id', $parentMenu->id)
                ->where('menus.subparent_id', 0)
                ->select(
                    'menus.*',
                    'role_permissions.menu_status',
                    'role_permissions.add',
                    'role_permissions.view',
                    'role_permissions.edit',
                    'role_permissions.delete'
                )
                ->get();

            foreach ($parentMenu->mainmenus as $mainMenu) {
                $mainMenu->submenus = Menu::leftJoin('role_permissions', function ($join) use ($mainMenu) {
                    $join->on('menus.id', '=', 'role_permissions.menuid')
                        ->where('role_permissions.parentid', '=', $mainMenu->parent_id)
                        ->where('role_permissions.subparentid', '=', $mainMenu->id);
                })
                    ->where('menus.parent_id', $mainMenu->parent_id)
                    ->where('menus.subparent_id', $mainMenu->id)
                    ->select(
                        'menus.*',
                        'role_permissions.menu_status',
                        'role_permissions.add',
                        'role_permissions.view',
                        'role_permissions.edit',
                        'role_permissions.delete'
                    )
                    ->get();
            }
        }

        return $menuswithpermission;
    }
}
