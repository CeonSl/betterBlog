<?php

namespace App\Http\Controllers;

use App\Models\NivelParametro;
use App\Models\Ropa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $tallas = NivelParametro::where('tipo', 'Talla')->get();
        $colors = NivelParametro::where('tipo', 'Color')->get();
        $ropas = Ropa::where('estado', 'activo')
        ->orderBy('prenda', 'desc')
        ->paginate(9);

        return view('dashboard', compact('ropas','colors','tallas'));
    }

}
