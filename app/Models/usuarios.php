<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Persona
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['nombre', 'edad', 'idUsuario'];
    protected $casts = ['idUsuario' => 'integer'];

    public function librosPrestados(): BelongsToMany
    {
        return $this->belongsToMany(Libro::class, 'prestamos');
    }
}