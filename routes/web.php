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

//Agregando nueva ruta para cargar el plan de evaluacion curricular
Route::get('gestion-curricular/cargar-plan-evaluacion-curricular', function() {
    return "En esta página podrá cargar el plan de evaluacion curricular.";
});

//Agregando nueva ruta para evaluar el Diseño Curricular
Route::get('gestion-curricular/evaluar-diseño-curricular', function() {
    return "En esta página podrá evaluar el Diseño Curricular.";
});