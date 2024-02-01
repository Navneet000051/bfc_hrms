<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
   public $table = 'users';
   protected $fillable = [
      'name', 'email', 'mobile', 'password', 'role_id', 'address', 'icon'
  ];

   public $timestamp = false;
}
