<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('formulario');
});

use App\Http\Controllers\FormularioController;

Route::get('/formulario', [FormularioController::class, 'mostrarFormulario'])->name('formulario.mostrar');
Route::post('/formulario', [FormularioController::class, 'procesarFormulario'])->name('formulario.procesar');
