<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Libro extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['titulo', 'autor', 'prestado'];
    protected $casts = ['prestado' => 'boolean'];

    public function biblioteca(): BelongsTo
    {
        return $this->belongsTo(Biblioteca::class);
    }

    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(Usuario::class, 'prestamos');
    }
}
