<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mailTemplate extends Model
{
    use HasFactory;
     
    protected $table = 'email_templates';
    protected $id = 'id';
    protected $fillable = [
'title' ,'body' ,'subject', 'status', 'created_by', 'updated_by', 'created_at' ,'updated_at'
    ];

}
