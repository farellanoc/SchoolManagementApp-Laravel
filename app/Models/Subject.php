<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_class',
        'id_teacher',
        'id_course',
        'id_schedule',
        'name',
        'color',
    ];
}
