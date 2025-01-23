<?php

namespace App\Http\Controllers;

use App\Models\Acuerdos; // Importar el modelo Acuerdos
use App\Models\Ordenanza; // Importar el modelo Ordenanza (nombre correcto)
use App\Models\Gaseta; // Importar el modelo Gasetas
use App\Models\Resolucion; // Importar el modelo Resoluciones
use App\Models\User; // Importar el modelo User
use App\Models\Expediente; // Importar el modelo Expedientes
use App\Models\Ordinarias; // Importar el modelo Ordinarias
use App\Models\Extraordinarias; // Importar el modelo Extraordinarias
use App\Models\Solemne; // Importar el modelo Solemnes
use App\Models\Especiales; // Importar el modelo Especiales
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $acuerdos = Acuerdos::all(); // Obtener todos los acuerdos
        $conteoAcuerdos = $acuerdos->count(); // Contar la cantidad de acuerdos
        
        $ordenanzas = Ordenanza::all(); // Obtener todas las ordenanzas
        $conteoOrdenanzas = $ordenanzas->count(); // Contar la cantidad de ordenanzas
        
        $gasetas = Gaseta::all(); // Obtener todas las gasetas
        $conteoGasetas = $gasetas->count(); // Contar la cantidad de gasetas
        
        $resoluciones = Resolucion::all(); // Obtener todas las resoluciones
        $conteoResoluciones = $resoluciones->count(); // Contar la cantidad de resoluciones
        
        $usuarios = User::all(); // Obtener todos los usuarios
        $conteoUsuarios = $usuarios->count(); // Contar la cantidad de usuarios
        
        $expedientes = Expediente::all(); // Obtener todos los expedientes
        $conteoExpedientes = $expedientes->count(); // Contar la cantidad de expedientes

        // Contar las ordinarias
        $ordinarias = Ordinarias::all(); // Obtener todas las ordinarias
        $conteoOrdinarias = $ordinarias->count(); // Contar la cantidad de ordinarias

        // Contar las extraordinarias
        $extraordinarias = Extraordinarias::all(); // Obtener todas las extraordinarias
        $conteoExtraordinarias = $extraordinarias->count(); // Contar la cantidad de extraordinarias

        // Contar las solemnes
        $solemne = Solemne::all(); // Obtener todas las solemnes
        $conteoSolemne = $solemne->count(); // Contar la cantidad de solemnes

        // Contar las especiales
        $especiales = Especiales::all(); // Obtener todas las especiales
        $conteoEspeciales = $especiales->count(); // Contar la cantidad de especiales

        return view('home', compact(
            'conteoAcuerdos', 
            'conteoOrdenanzas', 
            'conteoGasetas', 
            'conteoResoluciones', 
            'conteoUsuarios', 
            'conteoExpedientes',
            'conteoOrdinarias', // Agregar el conteo de ordinarias
            'conteoExtraordinarias', // Agregar el conteo de extraordinarias
            'conteoSolemne', // Agregar el conteo de solemnes
            'conteoEspeciales' // Agregar el conteo de especiales
        )); // Pasar los conteos a la vista
    }
}
