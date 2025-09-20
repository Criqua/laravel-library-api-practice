<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $table = "prestamos";
    protected $primaryKey = "prestamo_id";
    protected $fillable = [
        'libro_id',
        'usuario_id',
        'fecha_prestamo',
        'fecha_devolucion',
        'fecha_devolucion_real',
        'estado'
    ];

    public function book(){
        return $this->belongsTo(Book::class, 'libro_id', 'libro_id');
    }
}
