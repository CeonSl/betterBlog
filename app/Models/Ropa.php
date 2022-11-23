<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ropa extends Model
{

    protected $fillable = [
        'prenda','stock','precio',
        'talla','estado','imagenRef',
        'tipoColor_id'
    ];

    use HasFactory;
}
