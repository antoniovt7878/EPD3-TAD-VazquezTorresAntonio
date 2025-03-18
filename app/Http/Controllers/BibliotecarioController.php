<?php

namespace App\Http\Controllers;

use App\Models\Bibliotecario;
use Illuminate\Http\Request;

class BibliotecarioController extends Controller
{
    public function index()
    {
        $bibliotecarios = Bibliotecario::paginate(10);
        return view('bibliotecarios.index', compact('bibliotecarios'));
    }

    public function create()
    {
        return view('bibliotecarios.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required', 'edad' => 'required|integer', 'idEmpleado' => 'required']);
        Bibliotecario::create($request->all());
        return redirect()->route('bibliotecarios.index')->with('mensaje', 'Bibliotecario creado');
    }

    public function show(Bibliotecario $bibliotecario)
    {
        return view('bibliotecarios.show', compact('bibliotecario'));
    }

    public function edit(Bibliotecario $bibliotecario)
    {
        return view('bibliotecarios.edit', compact('bibliotecario'));
    }

    public function update(Request $request, Bibliotecario $bibliotecario)
    {
        $request->validate(['nombre' => 'required', 'edad' => 'required|integer', 'idEmpleado' => 'required']);
        $bibliotecario->update($request->all());
        return redirect()->route('bibliotecarios.index')->with('mensaje', 'Bibliotecario actualizado');
    }

    public function destroy(Bibliotecario $bibliotecario)
    {
        $bibliotecario->delete();
        return redirect()->route('bibliotecarios.index')->with('mensaje', 'Bibliotecario eliminado');
    }
}