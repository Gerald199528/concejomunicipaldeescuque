<?php

namespace App\Http\Controllers;
use App\Models\acuerdos;
use App\Models\Ordenanza;
use App\Models\Gaseta;
use App\Models\Resolucion; // Asegúrate de incluir el modelo Resolucion
use Illuminate\Http\Request;

class LegalesController extends Controller
{
    public function index()
    {
        $ordenanzas = Ordenanza::all();
        return view('legales', compact('ordenanzas'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $ordenanzas = Ordenanza::where('nombre', 'LIKE', "%{$query}%")
                                ->orWhere('fecha_importacion', 'LIKE', "%{$query}%")
                                ->get();
        return view('legales', compact('ordenanzas'));
    }

    public function showCetas()
    {
        $cetas = Gaseta::all();
        return view('cetas', compact('cetas'));
    }

    public function searchCetas(Request $request)
    {
        $query = $request->input('query');
        $cetas = Gaseta::where('nombre', 'LIKE', "%{$query}%")
                                ->orWhere('fecha_importacion', 'LIKE', "%{$query}%")
                                ->get();
        return view('cetas', compact('cetas'));
    }

    public function showResol()
    {
        $resol = Resolucion::all();
        return view('resol', compact('resol'));
    }

    public function searchResol(Request $request)
    {
        $query = $request->input('query');
        $resol = Resolucion::where('nombre', 'LIKE', "%{$query}%")
                                ->orWhere('fecha_importacion', 'LIKE', "%{$query}%")
                                ->get();
        return view('resol', compact('resol'));
    }
    public function showAcue()
    {
        $acue = Resolucion::all();
        return view('acue', compact('acue'));
    }

    public function searchAcue(Request $request)
    {
        $query = $request->input('query');
        $acue = acuerdos::where('nombre', 'LIKE', "%{$query}%")
                                ->orWhere('fecha_importacion', 'LIKE', "%{$query}%")
                                ->get();
        return view('acue', compact('acue'));
    }
}


