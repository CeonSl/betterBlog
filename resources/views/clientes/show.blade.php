@role('Administrator')
    @section('title', 'Cliente')
    <x-admin-layout>
        <div class="container">
            <div class="jumbotron">

                <div class="titulo">
                    <h2> Mostrar Cliente</h2>
                </div>

                <label class="label">Nombres:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $cliente->nombres }}
                </div>

                <label class="label">Apellidos:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $cliente->apellidos }}
                </div>

                <label class="label">Género:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    @foreach ($generos as $genero)
                        @if ($genero['id'] == $cliente->genero_id)
                            {{ $genero['descripcion'] }}
                        @endif
                    @endforeach
                </div>

                <label class="label">Dirección:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $cliente->direccion }}
                </div>
                <label class="label">Teléfono:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $cliente->telefono }}
                </div>
                <label class="label">Correo:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $cliente->correo }}
                </div>
                <label class="label">Estado:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $cliente->estado }}
                </div>

                <div class="boton mt-2">
                    <a class="text-white" href="{{ route('clientes.index') }}"> Volver</a>
                </div>
            </div>
        </div>
    </x-admin-layout>
@endrole
