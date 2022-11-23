<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombres', 'apellidos', 'direccion',
        'telefono', 'correo', 'estado', 'genero_id'
    ];

    use HasFactory;
}
