<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lowhrs extends Model
{
    use HasFactory;
    protected $fillable = [
        'performance',
        'experience',
        'resultbased',

        'form_id',

    ];
    public function form()
    {
        return $this->hasOne(Form::class, 'id', 'form_id');
    }
}
