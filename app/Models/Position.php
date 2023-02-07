<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $fillable = [
        'position',
        'position_type_id',
        'edu_level_id',
        'level_id',
        'experience',
    ];
    public function position_type()
    {
        return $this->hasOne(PositionType::class, 'id', 'position_type_id');
    }
    public function edu_level()
    {
        return $this->hasOne(EduLevel::class, 'id', 'edu_level_id');
    }
    public function level()
    {
        return $this->hasOne(Level::class, 'id', 'level_id');
    }

}
