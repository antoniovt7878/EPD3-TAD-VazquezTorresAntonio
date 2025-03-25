<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Bibliotecario;
use App\Models\Biblioteca;
use App\Models\Usuario;
use App\Models\Libro;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required', 'edad' => 'required|integer']);
        Persona::create($request->all());
        return redirect()->route('personas.index')->with('mensaje', 'Persona creada');
    }

    public function show(Persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, Persona $persona)
    {
        $request->validate(['nombre' => 'required', 'edad' => 'required|integer']);
        $persona->update($request->all());
        return redirect()->route('personas.index')->with('mensaje', 'Persona actualizada');
    }

    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('mensaje', 'Persona eliminada');
    }
}