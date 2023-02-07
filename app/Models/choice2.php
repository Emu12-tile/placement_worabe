<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choice2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'position_id',
        'job_category_id'
    ];
}
