<?php

namespace App\Http\Controllers;

use App\Models\NivelParametro;
use App\Models\Ropa;
use Illuminate\Http\Request;

class RopaController extends Controller
{
    public function index()
    {
        $ropas = Ropa::latest()->paginate(5);
        $colors = NivelParametro::where('tipo', 'Color')->get();

        return view('ropas.index', compact('ropas', 'colors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {

        $colors = NivelParametro::where('tipo', 'Color')->get();

        return view('ropas.create', compact('colors'));
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

        Ropa::create($request->all());

        $colors = NivelParametro::where('tipo', 'Color')->get();

        return redirect()->route('ropas.index')
            ->with('success', 'Ropa creada satisfactoriamente.');
    }

    public function show(Ropa $ropa)
    {
        return view('ropas.show', compact('ropa'));
    }


    public function edit(Ropa $ropa)
    {
        $colors = NivelParametro::where('tipo', 'Color')->get();
        return view('ropas.edit', compact('ropa', 'colors'));
    }

    public function update(Request $request, Ropa $ropa)
    {

        $request->validate([
            'prenda' => 'required',
            'stock' => 'required',
            'precio' => 'required',
            'talla' => 'required',
            'estado' => 'required',
            'imagenRef' => 'required',
        ]);

        $ropa->update($request->all());

        return redirect()->route('ropas.index')
            ->with('success', 'Ropa actualizada satisfactoriamente.');
    }

    public function destroy(Ropa $ropa)
    {
        $ropa->delete();

        return redirect()->route('ropas.index')
            ->with('success', 'Ropa eliminada satisfactoriamente.');
    }
}
