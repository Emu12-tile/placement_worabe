<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morerole extends Model
{
    use HasFactory;
    protected $fillable = [

        'form_id',
        'more_role',
       
    ];
    public function form()
    {
        return $this->hasOne(Form::class, 'id', 'form_id');
    }
  
}
