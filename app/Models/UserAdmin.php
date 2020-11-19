<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user_admin',
        'username',
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];
}
