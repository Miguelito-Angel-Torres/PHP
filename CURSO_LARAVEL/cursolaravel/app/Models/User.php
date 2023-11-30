<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// Agregacion de un Mutador:
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
    /*Attribute:indico que cuyo funcion se trata de la clase "Attribute" */ 
    protected function name():Attribute{
        // Indico que retorne una instancia de la clase Attribute()
        return new Attribute(
            // Accesor:
            // funcion flecha anonima:
            get: fn($value) => ucwords($value),
            // Mutador 
            set:fn($value) => strtolower($value),
        );

    }
    /*Formas antiguas que se realizaba para el Accesor y Mutador*/ 
    /*public function getNameAttribute($value){
        return ucwords($value);
    }
    public function setNameAttribute($value){
        $this->attributes[$value] = strtolower($value);
    }*/
    

    
        
}
