<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute;

class Alumno extends Model
{
    use HasFactory;
    protected $guarded =[];

    protected function name():Attribute{
        return new Attribute( 
            get: fn($value) => ucwords($value),
            set:fn($value) => strtolower($value),
        );}

    protected function apellido():Attribute{
        return new Attribute( 
            get: fn($value) => ucwords($value),
            set:fn($value) => strtolower($value),
        );}

    protected function telefono():Attribute{
        return new Attribute( 
            //get: fn($value) => "+51 {$value}",
            //set:fn($value) => "+51 {$value}",
        );}

    //un alumno perteneces a un bloque  
    public function bloque(){
        return $this->belongsTo(Bloque::class,'bloque_id');
    }

    public function actitude(){
        return $this->belongsTo(Actitude::class,'actitud_id');

    }

    
}
