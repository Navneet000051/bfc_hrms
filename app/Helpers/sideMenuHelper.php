<?php

namespace App\Helpers;

use App\Models\RolePermission;

class SideMenusHelper
{
    public static function getSideMenu($roleId)
    {
        // Fetch all menu data
        $allMenus = RolePermission::leftJoin('menus', function ($join) use ($roleId) {
            $join->on('role_permissions.menuid', '=', 'menus.id')
                ->where('role_permissions.roleid', '=', $roleId)
                ->where('role_permissions.menu_status', '=', 1)
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
    
        // Organize the menu data hierarchically
        $formattedSideMenu = self::buildMenuHierarchy($allMenus, 0, 0);
    
        return $formattedSideMenu;
    }
    
    protected static function buildMenuHierarchy($menus, $parentId, $subparentId)
    {
        $menuHierarchy = [];

        foreach ($menus as $menu) {
            if ($menu->parentid == $parentId && $menu->subparentid == $subparentId) {
                $submenu = self::buildMenuHierarchy($menus, $menu->id, 0);

                if ($submenu) {
                    $menu->submenu = $submenu;
                }

                $menuHierarchy[] = [
                    'id' => $menu->id,
                    'name' => $menu->name,
                    'url' => $menu->url,
                    'icon' => $menu->icon,
                    'submenu' => $submenu,
                ];
            }
        }

        return $menuHierarchy;
    }
}
