<?php

namespace App\Http\Controllers;

use App\Models\NivelParametro;
use App\Models\Ropa;
use Illuminate\Http\Request;

class PaymentController extends Controller
{

    public function index($id=0)
    {

        $tallas = NivelParametro::where('tipo', 'Talla')->get();
        $colors = NivelParametro::where('tipo', 'Color')->get();
        $ropa = Ropa::find($id);

        return view('pagos.payment',compact('tallas','colors','ropa'));
    }

    public function show($id=0){


        $ropa = Ropa::find($id);
        return view('pagos.show', compact('ropa'));
    }
}
