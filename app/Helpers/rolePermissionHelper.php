<?php

namespace App\Helpers;

use App\Models\rolePermission; // Replace YourModel with the actual model you want to use

class RolePermissionHelper
{
    public static function menuStatus($value, $id, $parentId, $subparentId, $roleId, $type, $menustatus)
    {
         $rolePermission = new rolePermission;
        // Use the parameters to fetch or manipulate data
        if($type == 'menu'){
            if(rolePermission::where('menuid',$id)->where('parentid',$parentId)->where('subparentid',$subparentId)->where('roleid',$roleId)->exists()){
                $result = rolePermission::where('menuid', $id)
                    ->where('parentid', $parentId)
                    ->where('subparentid', $subparentId)
                    ->where('roleid', $roleId)
                    ->update(['menustatus' => $value ]);
                   if($result){
                    echo 1;
                   }
                   else{
                    echo 0;
                   }    
            }
            else{
                $rolePermission->menuid = $id;
                $rolePermission->parentid = $parentId;
                $rolePermission->subparentid = $subparentId;
                $rolePermission->roleid = $roleId;
                $rolePermission->menu_status = $value;
                if($rolePermission->save()){
                    echo 1;
                   }
                   else{
                    echo 0;
                   }    
            }
        }else{

        }
      

        return $result;
    }

    public static function convertMdyToYmd($date)
    {
        // Your logic here
        return 2;
    }
}
