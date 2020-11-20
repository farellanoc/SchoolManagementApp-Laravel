<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'username',
        'pass',
        'email',
        'name',
        'surname',
        'telephone',
        'nif',
        'date_registered',
    ];
}
