<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginActivity extends Model
{
    use HasFactory;

    protected $table = 'login_activities';
    protected $primaryKey = 'id';
    
    protected $fillable = [
      'ip', 'agent', 'userid', 'created_at', 'updated_at'
    ]; 
}
