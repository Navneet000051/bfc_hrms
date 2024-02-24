<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class smtpSetting extends Model
{
    use HasFactory;
    protected $table = 'smtp_settings';
    protected $id = 'id';
    protected $fillable = [
'host' ,'port' ,'password', 'status', 'username', 'created_at' ,'updated_at'
    ];
}
