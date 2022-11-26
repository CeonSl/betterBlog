@role('Administrator')
    @section('title', 'Cliente')
    <x-admin-layout>
        <div class="container ">
            <div class="jumbotron mt-10">
                <div>
                    <div class="my-5">
                        <h2 class="titulo">Listado de Clientes</h2>
                        <div class="boton">
                            <a class="text-white" href="{{ route('clientes.create') }}"> Crear nuevo cliente</a>
                        </div>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 my-5">
                        <p class="text-md">{{ $message }}</p>
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Género</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th width="280px">Opciones</th>
                        </tr>
                    </thead>
                    @foreach ($clientes as $cliente)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $cliente->nombres }}</td>
                                <td>{{ $cliente->apellidos }}</td>
                                <td>{{ isset($cliente->genero_id) ? $generos->get('descripcion', $generos->find($cliente->genero_id)->descripcion) : '' }}
                                </td>
                                <td>{{ $cliente->direccion }}</td>
                                <td>{{ $cliente->telefono }}</td>
                                <td>{{ $cliente->correo }}</td>
                                <td>{{ $cliente->estado }}</td>
                                <td>
                                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">

                                        <div class="flex justify-around">
                                            <a class="boton-info h-10 w-10 flex-1"
                                                href="{{ route('clientes.show', $cliente->id) }}">
                                                <img class="px-5" src="{{ asset('img/acercarse.png') }}"
                                                    alt=""></a>

                                            <a class="boton-edit h-10 w-10 flex-1 mx-2"
                                                href="{{ route('clientes.edit', $cliente->id) }}">
                                                <img class="px-5" src="{{ asset('img/editar.png') }}" alt="">
                                            </a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="boton-eliminar bg-red-400 h-10 w-10 flex-1">
                                                <img class="px-5" src="{{ asset('img/eliminar.png') }}"
                                                    alt=""></button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>

                {!! $clientes->links() !!}
            </div>
        </div>

    </x-admin-layout>
@endrole
