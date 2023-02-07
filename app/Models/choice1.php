<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class choice1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'position_id',
        'job_category_id',
        'form_id'
    ];
    public function form()
    {
        return $this->hasOne(Form::class, 'id', 'form_id');
    }
    public function job_category()
    {
        return $this->hasOne(JobCategory::class, 'id', 'job_category_id');
    }
    public function position()
    {
        return $this->hasOne(Position::class, 'id', 'position_id');
    }
}
