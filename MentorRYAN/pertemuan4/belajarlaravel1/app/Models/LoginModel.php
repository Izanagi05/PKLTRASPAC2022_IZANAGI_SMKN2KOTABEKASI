<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model
{
    use HasFactory;

    protected $table = 'tb_login';
    protected $id = 'user_id';
    protected $fillable = ['username', 'password'];

}
