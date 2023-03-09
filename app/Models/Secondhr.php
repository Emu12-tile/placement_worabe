<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secondhr extends Model
{
    use HasFactory;
    protected $fillable = [
        'performance',
        'experience',
        'resultbased',
        'exam',
        'status_hr',
        'form_id',
        'presidentGrade',
        'status_president'
    ];
    public function form()
    {
        return $this->hasOne(Form::class, 'id', 'form_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,  'user_id');
    }
}
