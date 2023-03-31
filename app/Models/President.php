<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    use HasFactory;
    protected $fillable = [

        'presidentGrade',
        'status',
        'h_r__id'
    ];
    public function hr()
    {
        return $this->hasOne(HR::class, 'id', 'h_r__id');
    }
}
