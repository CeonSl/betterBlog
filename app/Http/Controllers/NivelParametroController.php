<?php

namespace App\Http\Controllers;

use App\Models\NivelParametro;
use Illuminate\Http\Request;

class NivelParametroController extends Controller
{
    public function index()
    {
        $nivel_parametros = NivelParametro::latest()->paginate(5);


        return view('nivel_parametros.index', compact('nivel_parametros'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('nivel_parametros.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'descripcion' => 'required',
            'tipo' => 'required',
            'estado' => 'required',
        ]);

        NivelParametro::create($request->all());

        return redirect()->route('nivel_parametros.index')
            ->with('success', 'Parametro creado satisfactoriamente.');
    }

    public function show(NivelParametro $nivel_parametro)
    {
        return view('nivel_parametros.show', compact('nivel_parametro'));
    }


    public function edit(NivelParametro $nivel_parametro)
    {
        return view('nivel_parametros.edit', compact('nivel_parametro'));
    }

    public function update(Request $request, NivelParametro $nivel_parametro)
    {
        $request->validate([
            'descripcion' => 'required',
            'tipo' => 'required',
            'estado' => 'required',
        ]);

        $nivel_parametro->update($request->all());

        return redirect()->route('nivel_parametros.index')
            ->with('success', 'Parametro actualizado satisfactoriamente.');
    }

    public function destroy(NivelParametro $nivel_parametro)
    {
        $nivel_parametro->delete();

        return redirect()->route('nivel_parametros.index')
            ->with('success', 'Parametro eliminado satisfactoriamente.');
    }
}
