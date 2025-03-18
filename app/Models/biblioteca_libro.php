<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BibliotecaLibro extends Model
{
    use HasFactory;

    protected $fillable = ['biblioteca_id', 'libro_id']; 

    public function biblioteca()
    {
        return $this->belongsTo(Biblioteca::class);
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
