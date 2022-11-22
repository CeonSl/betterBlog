<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NivelParametro extends Model
{
    protected $fillable = [
        'descripcion', 'tipo', 'estado'
    ];
    
    use HasFactory;
}
