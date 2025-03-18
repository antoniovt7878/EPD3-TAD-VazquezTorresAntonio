<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\BibliotecarioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PersonaController;

/* Página principal */
Route::get('/', function () {
    return view('welcome');
});

/* Rutas de autenticación */
Auth::routes();

/* Rutas de Usuarios */
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

/* Rutas de Libros */
Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
Route::get('/libros/create', [LibroController::class, 'create'])->name('libros.create');
Route::post('/libros', [LibroController::class, 'store'])->name('libros.store');
Route::get('/libros/{libro}', [LibroController::class, 'show'])->name('libros.show');
Route::get('/libros/{libro}/edit', [LibroController::class, 'edit'])->name('libros.edit');
Route::put('/libros/{libro}', [LibroController::class, 'update'])->name('libros.update');
Route::delete('/libros/{libro}', [LibroController::class, 'destroy'])->name('libros.destroy');

/* Rutas de Bibliotecarios */
Route::get('/bibliotecarios', [BibliotecarioController::class, 'index'])->name('bibliotecarios.index');
Route::get('/bibliotecarios/create', [BibliotecarioController::class, 'create'])->name('bibliotecarios.create');
Route::post('/bibliotecarios', [BibliotecarioController::class, 'store'])->name('bibliotecarios.store');
Route::get('/bibliotecarios/{bibliotecario}', [BibliotecarioController::class, 'show'])->name('bibliotecarios.show');
Route::get('/bibliotecarios/{bibliotecario}/edit', [BibliotecarioController::class, 'edit'])->name('bibliotecarios.edit');
Route::put('/bibliotecarios/{bibliotecario}', [BibliotecarioController::class, 'update'])->name('bibliotecarios.update');
Route::delete('/bibliotecarios/{bibliotecario}', [BibliotecarioController::class, 'destroy'])->name('bibliotecarios.destroy');

/* Rutas de Personas */
Route::get('/personas', [PersonaController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');
Route::get('/personas/{persona}', [PersonaController::class, 'show'])->name('personas.show');
Route::get('/personas/{persona}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
Route::put('/personas/{persona}', [PersonaController::class, 'update'])->name('personas.update');
Route::delete('/personas/{persona}', [PersonaController::class, 'destroy'])->name('personas.destroy');

/* Rutas de Biblioteca */
Route::get('/biblioteca', [BibliotecaController::class, 'index'])->name('biblioteca.index');
Route::get('/biblioteca/configuracion', [BibliotecaController::class, 'configuracion'])->name('biblioteca.configuracion');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
