<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function mostrarFormulario()
    {
        return view('formulario');
    }

    public function procesarFormulario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        // Aquí puedes procesar el nombre, por ejemplo, guardarlo en la base de datos
        $nombre = $request->input('nombre');

        // Retorna una vista con un mensaje de éxito
        return redirect()->route('formulario.mostrar')->with('success', "¡Hola, $nombre! Tu formulario ha sido enviado correctamente.");
    }
}
