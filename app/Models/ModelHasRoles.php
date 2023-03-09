<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

class ModelHasRoles extends Model
{
    use HasFactory;
    protected $fillable = [
        'model_id',
        'role_id',

    ];
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'model_id');
    }
    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }
}
