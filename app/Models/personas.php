<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['nombre', 'edad'];
    protected $casts = ['edad' => 'integer'];

    public function getNombreAttribute($value)
    {
        return ucfirst($value);
    }

    public function setNombreAttribute($value)
    {
        $this->attributes['nombre'] = strtolower($value);
    }
}
