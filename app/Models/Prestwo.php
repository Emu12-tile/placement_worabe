<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestwo extends Model
{
    use HasFactory;
    protected $fillable = [

        'presidentGrade',
        'status',
        'secondhr_id'
    ];
    public function secondhr()
    {
        return $this->hasOne(Secondhr::class, 'id', 'secondhr_id');
    }
}
