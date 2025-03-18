<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bibliotecario extends Persona
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['nombre', 'edad', 'idEmpleado'];
    protected $casts = ['idEmpleado' => 'integer'];

    public function biblioteca(): BelongsTo
    {
        return $this->belongsTo(Biblioteca::class, 'biblioteca_id');
    }

    protected static function booted()
    {
        static::created(function ($bibliotecario) {
            \Log::info("Nuevo bibliotecario creado: " . $bibliotecario->nombre);
        });
    }
}