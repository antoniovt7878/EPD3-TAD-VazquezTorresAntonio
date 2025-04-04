<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::paginate(10);
        return view('libros.index', compact('libros'));
    }

    public function create()
    {
        return view('libros.create');
    }

    public function store(Request $request)
    {
        $request->validate(['titulo' => 'required', 'autor' => 'required']);
        Libro::create($request->all());
        return redirect()->route('libros.index')->with('mensaje', 'Libro creado');
    }

    public function show(Libro $libro)
    {
        return view('libros.show', compact('libro'));
    }

    public function edit(Libro $libro)
    {
        return view('libros.edit', compact('libro'));
    }

    public function update(Request $request, Libro $libro)
    {
        $request->validate(['titulo' => 'required', 'autor' => 'required']);
        $libro->update($request->all());
        return redirect()->route('libros.index')->with('mensaje', 'Libro actualizado');
    }

    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libros.index')->with('mensaje', 'Libro eliminado');
    }
}
