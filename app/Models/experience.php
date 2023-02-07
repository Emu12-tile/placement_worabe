<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'positionyouworked',
        'startingDate',
        'endingDate',
        'form_id'
    ];
    public function form()
    {
        return $this->hasOne(Form::class, 'id', 'form_id');
    }
}
