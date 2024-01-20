<?php

namespace App\Helpers;

use App\Models\rolePermission; // Replace YourModel with the actual model you want to use

class RolePermissionHelper
{
    public static function menuStatus($value, $id, $parentId, $subparentId, $roleId, $type, $menustatus)
    {
        $rolePermission = new rolePermission;
       
        // Use the parameters to fetch or manipulate data
        if ($type == 'menu_status') {

            if ($parentId != 0 && $subparentId == 0) {
                $existingPermission = rolePermission::where('roleid', $roleId)->where('menuid', $parentId)->first();
                // Additional conditions for updating or creating records
                if ($existingPermission) {
                    if ($existingPermission->menu_status != 1) {
                        if (rolePermission::where('roleid', $roleId)->where('menuid', $parentId)
                    ->update(['menu_status' => $value])
                ){
                    // return ['status' => 'FIRST VALA UPDATED'];
                }
                      
                    }
                } else {
                    $rolePermission = new rolePermission;
                    $rolePermission->menuid = $parentId;
                    $rolePermission->parentid = 0;
                    $rolePermission->subparentid = 0;
                    $rolePermission->roleid = $roleId;
                    $rolePermission->menu_status = 1;
    
                    if ($rolePermission->save()) {
                        return ['status' => 'FIRST VALA CREATED'];
                    }
                }
            } 

            if (rolePermission::where('roleid', $roleId)->where('menuid', $id)->exists()) {

                if (rolePermission::where('roleid', $roleId)->where('menuid', $id)
                    ->update(['menu_status' => $value])
                ) {
                    return ['status' => 'success']; // Successfully updated or created
                } else {
                    return ['status' => 'error']; // Successfully updated or created
                }
            } else {
                $rolePermission->menuid = $id;
                $rolePermission->parentid = $parentId;
                $rolePermission->subparentid = $subparentId;
                $rolePermission->roleid = $roleId;
                $rolePermission->menu_status = $value;
                if ($rolePermission->save()) {
                    return 1;
                } else {
                    return ['status' => 'error']; // Successfully updated or created
                }
            }
        } else {

            if (rolePermission::where('roleid', $roleId)->where('menuid', $id)->exists()) {

                $result = rolePermission::where('roleid', $roleId)->where('menuid', $id)
                    ->update([$type => $value]);
                if ($result) {
                    return ['status' => 'success']; // Successfully updated or created
                } else {
                    return ['status' => 'error']; // Successfully updated or created
                }
            } else {
                $rolePermission->menuid = $id;
                $rolePermission->parentid = $parentId;
                $rolePermission->subparentid = $subparentId;
                $rolePermission->roleid = $roleId;
                $rolePermission->menu_status = $menustatus;
                $rolePermission->$type = $value;
                if ($rolePermission->save()) {
                    return ['status' => 'success']; // Successfully updated or created
                } else {
                    return ['status' => 'error']; // Successfully updated or created
                }
            }
        }
    }

}
