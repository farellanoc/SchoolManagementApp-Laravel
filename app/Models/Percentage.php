<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Percentage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_percentage',
        'id_course',
        'id_class',
        'exams',
        'continuous_assessment',
    ];
}
