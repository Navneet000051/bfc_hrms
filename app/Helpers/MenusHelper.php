<?php
namespace App\Helpers;
use App\Models\Menu;
class MenusHelper {
public static function getMenuHierarchies()
{
    $menus = Menu::where('parent_id', 0)->where('subparent_id', 0)->where('status',1)->get();

    foreach ($menus as $parentMenu) {
        $parentMenu->mainmenus = Menu::where('parent_id', $parentMenu->id)
            ->where('subparent_id', 0)->where('status',1)
            ->get();

        foreach ($parentMenu->mainmenus as $mainMenu) {
            $mainMenu->submenus = Menu::where('parent_id', $mainMenu->parent_id)
                ->where('subparent_id', $mainMenu->id)->where('status',1)
                ->get();
        }
    }

    return $menus;
}
}
