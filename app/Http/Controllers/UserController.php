<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdatePasswordRequest;
use App\Models\User; // Importa el modelo User

class UserController extends Controller
{


 public function update(UpdatePasswordRequest $request)
{
    $users = Auth::user();

    // Verificar si la contraseña actual es correcta
      $users->update($request->all());
        return back()->with('use','User deleted successfully');

    }



    public function showChangePasswordForm()
    {
        return view('user.change_password');
    }





    public function store(Request $request)
    {
        $request->validate([
            'motivo' => 'required|string|max:255',
            'fecha_egreso' => 'required|date',
        ]);
    
        $user = new User();
        $user->name = $request->input('name');
        $user->apellido = $request->input('apellido');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->status = $request->input('status');
        $user->motivo = $request->input('motivo');
        $user->fecha_egreso = $request->input('fecha_egreso');
        $user->save();
    
        return redirect()->route('usuarios.index');
    }

    public function toggleStatus($id)
    {
        $user = User::findOrFail($id);
        $user->status = !$user->status;
        $user->save();
        
        return redirect()->back()->with('success', 'Estado del usuario actualizado.');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|boolean',
            'motivo' => 'nullable|string',
            'fecha_egreso' => 'nullable|date',
        ]);
    
        $usuario = User::findOrFail($id);
        $usuario->status = $request->status;
        $usuario->motivo = $request->motivo;
        $usuario->fecha_egreso = $request->fecha_egreso;
        $usuario->save();
    
        return redirect()->route('users.index')->with('success', 'Estado del usuario actualizado correctamente.');
    }

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
}
