<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actitude extends Model
{
    use HasFactory;

    protected $guarded =[];
    
    public function alumnos()
    {
        return $this->hasMany(Alumno::class,'id');
    }
}
