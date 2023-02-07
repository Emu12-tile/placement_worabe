<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'position',
        'position_type',
        'education_type',
        'education_level',
        'apply_for_position',
        'job_category',
        'level'


    ];
}
