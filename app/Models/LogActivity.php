<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject', 'url', 'method', 'ip', 'agent', 'userid', 'username', 'role', 'created_at', 'updated_at'
    ];
    protected $table = 'create_log_activity_tables';
    protected $primaryKey = 'id';
}
