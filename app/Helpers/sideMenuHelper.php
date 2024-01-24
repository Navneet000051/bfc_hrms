<?php

namespace App\Helpers;

use App\Models\Menu;
use App\Models\RolePermission;

class sideMenusHelper
{
    public static function getSideMenu($roleId)
    {
        // Fetch menu data based on the role ID
        $menus = Menu::leftJoin('role_permissions', function ($join) use ($roleId) {
                $join->on('menus.id', '=', 'role_permissions.menuid')
                    ->where('role_permissions.roleid', '=', $roleId);
            })
            ->select(
                'menus.id',
                'menus.name',
                'menus.url',
                'role_permissions.add',
                'role_permissions.view',
                'role_permissions.edit',
                'role_permissions.delete'
            )
            ->get();

        // Organize the menu data as needed
        $sideMenu = [];

        foreach ($menus as $menu) {
            // Customize the structure based on your needs
            $sideMenu[] = [
                'id' => $menu->id,
                'name' => $menu->name,
                'url' => $menu->url,
                'permissions' => [
                    'add' => $menu->add,
                    'view' => $menu->view,
                    'edit' => $menu->edit,
                    'delete' => $menu->delete,
                ],
            ];
        }

        return $sideMenu;
    }
}
