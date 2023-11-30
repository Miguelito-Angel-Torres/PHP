<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // Esta logica verifica si tiene o no tiene permisos como administrador(tiene:true,no tiene:false)
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
        // Si no cumple lo que indico de las validaciones retorna en el mismo formulario
        return [
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10|string',
            'categoria' => 'required',
        ];
    }

    public function attributes(){
        return [
            'name' => 'nombre del curso',
        ];
    }

    public function messages(){
        return [
            'descripcion.required' => 'Debe Ingresar una descripcion del curso',
        ];
    }
}
