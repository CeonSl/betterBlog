<?php

namespace App\Http\Controllers;

use App\Models\NivelParametro;
use App\Models\Ropa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RopaController extends Controller
{
    public function index()
    {
        $ropas = Ropa::latest()->paginate(5);
        $colors = NivelParametro::where('tipo', 'Color')->get();
        $tallas = NivelParametro::where('tipo', 'Talla')->get();

        return view('ropas.index', compact('ropas', 'colors', 'tallas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

   
    public function getJsonParametros(){
        $parametrosJson = json_encode(NivelParametro::all());

        return response()->json($parametrosJson, 200);
    }
    public function create()
    {

        $colors = NivelParametro::where('tipo', 'Color')->get();
        $tallas = NivelParametro::where('tipo', 'Talla')->get();

        return view('ropas.create', compact('colors', 'tallas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'prenda' => 'required',
            'stock' => 'required',
            'precio' => 'required',
            'talla' => 'required',
            'estado' => 'required',
            'imagenRef' => 'required',
        ]);

        if ($request->hasFile("imagenRef")) {
            $ropa = new Ropa();
            $ropa->prenda = $request->prenda;
            $ropa->stock = $request->stock;
            $ropa->precio = $request->precio;
            $ropa->talla = $request->talla;
            $ropa->estado = $request->estado;
            $ropa->tipoColor_id = $request->tipoColor_id;
            $ropa->imagenRef = Storage::put('ropas', $request->file("imagenRef"));
            $ropa->save();
        }

        $colors = NivelParametro::where('tipo', 'Color')->get();
        $tallas = NivelParametro::where('tipo', 'Talla')->get();

        return redirect()->route('ropas.index')
            ->with('success', 'Ropa creada satisfactoriamente.');
    }

    public function show(Ropa $ropa)
    {
        $tallas = NivelParametro::where('tipo', 'Talla')->get();
        $colors = NivelParametro::where('tipo', 'Color')->get();
        return view('ropas.show', compact('ropa', 'colors', 'tallas'));
    }


    public function edit(Ropa $ropa)
    {
        $tallas = NivelParametro::where('tipo', 'Talla')->get();
        $colors = NivelParametro::where('tipo', 'Color')->get();
        return view('ropas.edit', compact('ropa', 'colors', 'tallas'));
    }

    public function update(Request $request, Ropa $ropa)
    {
        $request->validate([
            'prenda' => 'required',
            'stock' => 'required',
            'precio' => 'required',
            'talla' => 'required',
            'estado' => 'required',
        ]);

        $ropa->update($request->all());

        if ($request->hasFile("imagenRef")) {

            if ($ropa->imagenRef) {
                Storage::delete($ropa->imagenRef);
            }

            $imagenRef = Storage::put('ropas', $request->file("imagenRef"));
            $ropa->imagenRef = $imagenRef;
            $ropa->save();
        }


        return redirect()->route('ropas.index')
            ->with('success', 'Ropa actualizada satisfactoriamente.');
    }

    public function destroy(Ropa $ropa)
    {
        $ropa->delete();
        Storage::delete($ropa->imagenRef);

        return redirect()->route('ropas.index')
            ->with('success', 'Ropa eliminada satisfactoriamente.');
    }

    public function getJson()
    {
        $prendasJson = json_encode(Ropa::all());

        return response()->json($prendasJson, 200);
    }

    public function generarPdf(){
        $ropas = Ropa::all();
        $colors = NivelParametro::where('tipo', 'Color')->get();
        $tallas = NivelParametro::where('tipo', 'Talla')->get();
        $pdf = Pdf::loadView('ropas.generarPDF', compact('ropas','colors','tallas'));
        return $pdf->setPaper('a4', 'landscape')->stream('Prendas Registradas.pdf');
    }

}
