<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rolePermission extends Model
{
    use HasFactory;
    protected $table = 'role_permissions';
    protected $primaryKey = 'id';
    public $timestamp = false;
    protected $fillable = [
        'roleid',
        'parentid',
        'subparentid',
        'menuid',
        'add',
        'view',
        'edit',
        'delete',
        'status',
        'menu_status',
    ];
}
