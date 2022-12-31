<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'email',
        'phone',
        'admin_id',
        'educationtype_id'
    ];
    public function admin()
    {
        return $this->hasOne(Admin::class, 'id', 'admin_id');
    }
    public function Educationtype()
    {
        return $this->hasOne(Educationtype::class, 'id', 'educationtype_id');
    }
}
