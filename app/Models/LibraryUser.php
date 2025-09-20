<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibraryUser extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "usuario_id";
    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'password',
        'tipo',
        'created_at',
        'updated_at'
    ];
}
