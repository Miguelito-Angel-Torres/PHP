<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importancion para Correo SMTP:
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;




class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    // Procesar y enviar el correo eletronico
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'required',
        ]);


        $correo = new ContactanosMailable($request->all());
        Mail::to('mallquitorres1234@gmail.com')->send($correo);
        // Estamos pasando una Sesion llamado : info con el metodo with
        return  redirect()->route('contactanos.index')->with('info','Mensaje Enviado');
    }
}
