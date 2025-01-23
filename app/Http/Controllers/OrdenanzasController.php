<?php

namespace App\Http\Controllers;

use App\Models\Ordenanza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrdenanzasController extends Controller
{
    public function index()
    {
        $ordenanzas = Ordenanza::all();
        $conteoOrdenanzas = $ordenanzas->count(); // Contar la cantidad de ordenanzas
        return view('instrumentoslegales.ordenanzas.index', compact('ordenanzas', 'conteoOrdenanzas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ordenanza' => 'required|file|mimes:pdf|max:2048', // Solo permite archivos PDF
        ]);

        if ($request->hasFile('ordenanza')) {
            $file = $request->file('ordenanza');
            $fileName = $file->getClientOriginalName(); // Mantener el nombre original del archivo

            // Verificar si el archivo ya existe en la base de datos
            if (Ordenanza::where('nombre', $fileName)->exists()) {
                return redirect()->back()->with('error', 'Estimado usuario el documento ya existe en la base de datos.');
            }

            $file->storeAs('public/ordenanzas', $fileName);

            Ordenanza::create([
                'nombre' => $fileName,
                'ruta' => 'ordenanzas/' . $fileName,
                'fecha_importacion' => now(), // Guardar la fecha de importación
            ]);

            return redirect()->back()->with('success', 'Documento cargado exitosamente.');
        }

        return redirect()->back()->with('error', 'Error al cargar el documento.');
    }

    public function destroy($fileName)
    {
        $filePath = 'public/ordenanzas/' . $fileName;
        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
            Ordenanza::where('nombre', $fileName)->delete();
            return redirect()->back()->with('success', 'Documento eliminado exitosamente.');
        }

        return redirect()->back()->with('error', 'El documento no existe.');
    }

    public function download($fileName)
    {
        $filePath = 'public/ordenanzas/' . $fileName;
        if (Storage::exists($filePath)) {
            return Storage::download($filePath);
        }

        return redirect()->back()->with('error', 'El documento no existe.');
    }
}
