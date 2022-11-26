@role('Administrator')
    @section('title', 'Nivel Parámetro')
    <x-admin-layout>

        <div class="container ">
            <div class="jumbotron mt-10 ">
                <div  class="scroll-mt-40">
                    <div>
                        <div class="my-5">
                            <h2 class="titulo">Listado de Parámetros</h2>
                            <div class="boton">
                                <a class="text-white" href="{{ route('nivel_parametros.create') }}"> Crear nuevo parámetro</a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3">
                            <p class="text-sm">{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Descripción</th>
                                <th>Tipo</th>
                                <th>Estado</th>
                                <th width="280px">Opciones</th>
                            </tr>
                        </thead>
                        @foreach ($nivel_parametros as $nivel_parametro)
                            <tbody>
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $nivel_parametro->descripcion }}</td>
                                    <td>{{ $nivel_parametro->tipo }}</td>
                                    <td>{{ $nivel_parametro->estado }}</td>
                                    <td>
                                        <form action="{{ route('nivel_parametros.destroy', $nivel_parametro->id) }}"
                                            method="POST">

                                            <div class="flex justify-around">
                                                <a class="boton-info h-10 w-10 flex-1"
                                                    href="{{ route('nivel_parametros.show', $nivel_parametro->id) }}">
                                                    <img class="px-5" src="{{ asset('img/acercarse.png') }}"
                                                        alt=""></a>

                                                <a class="boton-edit h-10 w-10 flex-1 mx-2"
                                                    href="{{ route('nivel_parametros.edit', $nivel_parametro->id) }}">
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
                </div>
                {!! $nivel_parametros->links() !!}

                
            </div>
        </div>


    </x-admin-layout>
@endrole
