<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $primaryKey = 'id';

    // public static function getMenuHierarchy()
    // {
    //     $menus = self::where('parent_id', 0)->where('subparent_id', 0)->get();

    //     foreach ($menus as $parentMenu) {
    //         $parentMenu->mainmenus = self::where('parent_id', $parentMenu->id)
    //             ->where('subparent_id', 0)
    //             ->get();

    //         foreach ($parentMenu->mainmenus as $mainMenu) {
    //             $mainMenu->submenus = self::where('parent_id', $mainMenu->parent_id)
    //                 ->where('subparent_id', $mainMenu->id)
    //                 ->get();
    //         }
    //     }

    //     return $menus;
    // }

}

