<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployerSupport extends Model
{
    use HasFactory;
    protected $fillable = [

        'form_id',
        'employer_support',

    ];
    public function form()
    {
        return $this->hasOne(Form::class, 'id', 'form_id');
    }
}
