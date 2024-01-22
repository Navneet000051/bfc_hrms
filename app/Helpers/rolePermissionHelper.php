<?php

namespace App\Helpers;

use App\Models\rolePermission;

class RolePermissionHelper
{
    public static function menuStatus($value, $id, $parentId, $subparentId, $roleId, $type, $menustatus)
    {
        $data = [
            'menuid' => $id,
            'parentid' => $parentId,
            'subparentid' => $subparentId,
            'roleid' => $roleId,
        ];

        if ($type == 'menu_status') {
            // Additional conditions for menu_status when $parentId is not 0 and $subparentId is 0
            if ($parentId != 0 && $subparentId == 0) {
                $existingRecord = rolePermission::where('menuid', $parentId)
                    ->where('roleid', $roleId)
                    ->first();

                if ($existingRecord) {
                    // If menu_status is not 1, update it to 1
                    if ($existingRecord->menu_status != 1) {
                        $existingRecord->update(['menu_status' => 1]);
                    }
                } else {
                    // If no record found, insert a new record
                    rolePermission::create([
                        'menuid' => $parentId,
                        'parentid' => 0,
                        'subparentid' => 0,
                        'roleid' => $roleId,
                        'menu_status' => 1,
                    ]);
                }
            }
            elseif ($parentId != 0 && $subparentId != 0) {
                // Additional conditions for menu_status when $parentId is not 0 and $subparentId is not 0
                $existingParentRecord = rolePermission::where('menuid', $parentId)
                    ->where('roleid', $roleId)
                    ->first();

                if ($existingParentRecord) {
                    // If menu_status is not 1, update it to 1
                    if ($existingParentRecord->menu_status != 1) {
                        $existingParentRecord->update(['menu_status' => 1]);
                    }
                } else {
                    // If no record found, insert a new record
                    rolePermission::create([
                        'menuid' => $parentId,
                        'parentid' => 0,
                        'subparentid' => 0,
                        'roleid' => $roleId,
                        'menu_status' => 1,
                    ]);
                }

                $existingSubparentRecord = rolePermission::where('menuid', $subparentId)
                    ->where('roleid', $roleId)
                    ->first();

                if ($existingSubparentRecord) {
                    // If menu_status is not 1, update it to 1
                    if ($existingSubparentRecord->menu_status != 1) {
                        $existingSubparentRecord->update(['menu_status' => 1]);
                    }
                } else {
                    // If no record found, insert a new record
                    rolePermission::create([
                        'menuid' => $subparentId,
                        'parentid' => $parentId,
                        'subparentid' => 0,
                        'roleid' => $roleId,
                        'menu_status' => 1,
                    ]);
                }
            }
            else{

            }


            $data['menu_status'] = $value;
        } else {
            // Additional conditions for other $type values when $parentId is not 0 and $subparentId is 0
            if ($parentId != 0 && $subparentId == 0) {
                $existingRecord = rolePermission::where('menuid', $parentId)
                    ->where('roleid', $roleId)
                    ->first();

                if ($existingRecord) {
                    // If $type is not 1, update it to the provided value
                    if ($existingRecord->menu_status != 1) {
                        $existingRecord->update(['menu_status' => 1]);
                    }
                } else {
                    // If no record found, insert a new record
                    rolePermission::create([
                        'menuid' => $parentId,
                        'parentid' => 0,
                        'subparentid' => 0,
                        'roleid' => $roleId,
                        'menu_status' => 1,
                        $type => $value,
                    ]);
                }
            }
            elseif ($parentId != 0 && $subparentId != 0) {
                // Additional conditions for menu_status when $parentId is not 0 and $subparentId is not 0
                $existingParentRecord = rolePermission::where('menuid', $parentId)
                    ->where('roleid', $roleId)
                    ->first();

                if ($existingParentRecord) {
                    // If menu_status is not 1, update it to 1
                    if ($existingParentRecord->menu_status != 1) {
                        $existingParentRecord->update(['menu_status' => 1]);
                    }
                } else {
                    // If no record found, insert a new record
                    rolePermission::create([
                        'menuid' => $parentId,
                        'parentid' => 0,
                        'subparentid' => 0,
                        'roleid' => $roleId,
                        'menu_status' => 1,
                    ]);
                }

                $existingSubparentRecord = rolePermission::where('menuid', $subparentId)
                    ->where('roleid', $roleId)
                    ->first();

                if ($existingSubparentRecord) {
                    // If menu_status is not 1, update it to 1
                    if ($existingSubparentRecord->menu_status != 1) {
                        $existingSubparentRecord->update(['menu_status' => 1]);
                    }
                } else {
                    // If no record found, insert a new record
                    rolePermission::create([
                        'menuid' => $subparentId,
                        'parentid' => $parentId,
                        'subparentid' => 0,
                        'roleid' => $roleId,
                        'menu_status' => 1,
                    ]);
                }
            }
            else{
                
            }

            $data['menu_status'] = $menustatus;
            $data[$type] = $value;
        }
        // dd($data);
        rolePermission::updateOrCreate(
            ['roleid' => $roleId, 'menuid' => $id],
            $data
        );

        return ['status' => 'success']; // Successfully updated or created
    }   
}
