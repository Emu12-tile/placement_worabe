<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edutype extends Model
{
    use HasFactory;
    protected $fillable = [

        'position_id',
        'choice2_id',
        'education_type'
    ];
    public function position()
    {
        return $this->hasOne(Form::class, 'id', 'position_id');
    }

    // public function education_type()
    // {
    //     return $this->hasOne(EducationType::class, 'id', 'education_type_id');
    // }
}
