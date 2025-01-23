<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdatepassworRequest;
use App\Models\Imagens;
use App\Models\User; // Importa el modelo User
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MiuserController extends Controller
{
    public function showChangePasswordForm()
    {
        return view('miuser-de-usuario'); // Cambia esto por la vista que contiene el formulario
    }

    public function updatePassword(UpdatepassworRequest $request)
    {
        $user = Auth::user(); // Asegúrate de usar el modelo User
        $repeatPassword = '';
        $notification = '';

        // Comprobar si la contraseña actual coincide
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'Tu contraseña actual no coincide con la que has proporcionado.');
        }

        // Comprobar si la nueva contraseña es igual a la actual
        if (Hash::check($request->password, $user->password)) {
            $repeatPassword = 'La nueva contraseña no puede ser igual a la contraseña actual.';
        } else {
            // Actualizar la contraseña
            $user->password = bcrypt($request->password);
            $user->save(); // Guarda el usuario
            $notification = 'La contraseña se ha actualizado correctamente.';
        }

        return redirect()->back()->with(compact('repeatPassword', 'notification'));
    }
    // Método para restablecer la contraseña sin token ni enlace de correo
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'No podemos encontrar un usuario con esa dirección de correo electrónico.']);
        }

        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('/login')->with('status', '¡Tu contraseña ha sido restablecida!');
    }



    
    // Método para listar imágenes del usuario
    public function index()
    {
        $imagens = Imagens::where('id', Auth::user()->id)->paginate(1);
        return view('miuser.index', compact('imagens'));
    }


// Método para almacenar una nueva imagen
public function store(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:2048',
    ]);

    // Encuentra y elimina la imagen existente del usuario
    $this->deleteExistingImage();

    // Guardar la nueva imagen con el nombre original
    $url = $this->saveImage($request->file('file'));

    // Crear un nuevo registro de imagen
    Imagens::create([
        'id' => Auth::user()->id,
        'url' => $url,
    ]);

    // Establecer un mensaje de éxito en la sesión
    return redirect()->route('miuser.index')->with('success', 'Imagen guardada correctamente');
}




    
    // Método para mostrar una imagen
    public function show(Imagens $imagen)
    {
        return redirect()->route('miuser.index');
    }

    // Método para eliminar una imagen
    public function destroy(Imagens $imagen)
    {
        // Implementar lógica de eliminación si es necesario
    }

    // Método privado para eliminar la imagen existente
    private function deleteExistingImage()
    {
        $existingImage = Imagens::where('id', Auth::id())->first();
        if ($existingImage) {
            Storage::delete('public/User/' . basename($existingImage->url));
            $existingImage->delete();
        }
    }

    // Método privado para guardar la imagen con el nombre original
    private function saveImage($file)
    {
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('public/User', $filename);
        return Storage::url($path);
    }
}
