<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::paginate(10);
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required', 'edad' => 'required|integer', 'idUsuario' => 'required']);
        Usuario::create($request->all());
        return redirect()->route('usuarios.index')->with('mensaje', 'Usuario creado');
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate(['nombre' => 'required', 'edad' => 'required|integer', 'idUsuario' => 'required']);
        $usuario->update($request->all());
        return redirect()->route('usuarios.index')->with('mensaje', 'Usuario actualizado');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('mensaje', 'Usuario eliminado');
    }
}
