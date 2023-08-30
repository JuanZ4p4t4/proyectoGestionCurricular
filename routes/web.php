<?php

use Illuminate\Support\Facades\Route;

//agregando ruta raiz
Route::get('/', function () {
    /*return view('welcome');*/
    return "Bienvenido a la pagina principal";    
});

//agregando nueva ruta principal
Route::get('gestion-curricular', function() {
    return "Bienvenido a la Gestión de Curricular";
});

