<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserModel extends Model
{
   use HasApiTokens, HasFactory, Notifiable;
   public $table = 'users';
   protected $fillable = [
      'name', 'email', 'mobile', 'password', 'role_id', 'address', 'icon'
  ];

   public $timestamp = false;
}
