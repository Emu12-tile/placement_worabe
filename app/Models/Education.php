<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [

        'form_id',
        'level',
        'discipline',
        'completion_date',
        'academicPreparationCOC'
        // 'edu_level_id',
        // 'education_type_id'
    ];
    public function form()
    {
        return $this->hasOne(Form::class, 'id', 'form_id');
    }
    // public function edu_level()
    // {
    //     return $this->hasOne(EduLevel::class, 'id', 'edu_level_id');
    // }
    // public function education_type()
    // {
    //     return $this->hasOne(EducationType::class, 'id', 'education_type_id');
    // }
}
