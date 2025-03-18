<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Biblioteca extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['nombre'];

    public function catalogo(): HasMany
    {
        return $this->hasMany(Libro::class);
    }

    public function bibliotecarios(): HasMany
    {
        return $this->hasMany(Bibliotecario::class, 'biblioteca_id');
    }
}