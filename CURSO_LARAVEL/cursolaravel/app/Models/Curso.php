<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //Ejem: Le indico que administre otra tabla que no es la tabla de su convención establecido
    //protected $table = "users"; 

    // Colocar los campos que quiere que se rellene informacion del formulario por seguridad:
    //protected $fillable = ['name','descripcion','categoria'];
    // propiedad Guarded: Colocamos el campo que deseo ignorar
    protected $guarded = [];

    public function getRouteKeyName()
    {
       return 'slug';
    }
    

}
