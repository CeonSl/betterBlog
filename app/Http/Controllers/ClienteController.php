<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\NivelParametro;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::latest()->paginate(5);
        $generos = NivelParametro::where('tipo','Genero')->get();

        return view('clientes.index', compact('clientes', 'generos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {

        $generos = NivelParametro::where('tipo','Genero')->get();

        return view('clientes.create', compact('generos'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required|email',
            'estado' => 'required',
        ]);

        Cliente::create($request->all());

        $generos = NivelParametro::where('tipo','Genero')->get();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente creado satisfactoriamente.');
    }

    public function show(Cliente $cliente)
    {
        $generos = NivelParametro::where('tipo','Genero')->get();
        return view('clientes.show', compact('cliente','generos'));
    }


    public function edit(Cliente $cliente)
    {
        $generos = NivelParametro::where('tipo','Genero')->get();
        return view('clientes.edit', compact('cliente','generos'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required|email',
            'estado' => 'required',
        ]);

        $cliente->update($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente actualizado satisfactoriamente.');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente eliminado satisfactoriamente.');
    }
}
