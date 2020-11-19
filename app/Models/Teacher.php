<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_teacher',
        'username',
        'pass',
        'name',
        'surname',
        'telephone',
        'nif',
        'email',
    ];
}