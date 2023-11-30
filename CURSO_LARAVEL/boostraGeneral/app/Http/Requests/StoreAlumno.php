<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumno extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            /*'apellido' => 'required',
            'edad' =>'required',
            'dni' => 'required',
            'correo' => 'required',
            'telefono' => 'required',
            'bloque_id' => 'required',
            'actitud_id' => 'required',
            'semestre' => 'required',
            'mes' => 'required',*/
        ];   
    }

    public function attributes(){
        return [
            'name' => 'nombre del alumno',
            /*'apellido' => 'apellido del alumno',
            'edad' =>'edad del alumno',
            'dni' => 'dni del alumno',
            'correo' => 'correo del alumno',
            'telefono' => 'telefono del alumno',
            'bloque_id' => 'bloque del alumno',
            'actitud_id' => 'actitud del alumno',
            'semestre' => 'semestre del alumno',
            'mes' => 'mes',*/
        ];
    }
    //https://blastcoding.com/validacion-de-formularios-en-laravel/
    
}
