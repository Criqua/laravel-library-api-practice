<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Loan;

class Book extends Model
{
    protected $table = "libros";
    protected $primaryKey = "libro_id";
    protected $fillable = [
        'titulo',
        'autor',
        'isbn',
        'anio_publicacion',
        'editorial',
        'cantidad_ejemplares',
        'cantidad_disponible',
        'estado',
        'imagen_url',
        'created_at',
        'updated_at'
    ];

    public function loans(){
        return $this->hasMany(Loan::class, 'libro_id', 'libro_id');
    }
}
