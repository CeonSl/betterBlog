@role('Administrator')
    @section('title', 'Ropa')
    <x-admin-layout>
        <div class="container pb-10">
            <div class="jumbotron mt-10">
                <div>
                    <div class="my-5 ">
                        <h2 class="titulo">Listado de Ropas</h2>
                        
                    </div>
                    <div class="boton col-span-2">
                        <a class="text-white" href="{{ route('ropas.create') }}"> Crear ropa</a>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-4 my-5">
                        <p class="text-sm">{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Prenda</th>
                            <th>Color</th>
                            <th>Stock</th>
                            <th>Precio</th>
                            <th>Talla</th>
                            <th>Estado</th>
                            <th>Imagen</th>
                            <th width="280px">Opciones</th>
                        </tr>
                    </thead>
                    @foreach ($ropas as $ropa)
                        <tbody>
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $ropa->prenda }}</td>
                                <td>{{ isset($ropa->tipoColor_id) ? $colors->get('descripcion', $colors->find($ropa->tipoColor_id)->descripcion) : '' }}
                                </td>
                                <td>{{ $ropa->stock }}</td>
                                <td>{{ $ropa->precio }}</td>
                                <td>{{ isset($ropa->talla) ? $tallas->get('descripcion',$ropa->talla) : '' }}</td>
                                <td>{{ $ropa->estado }}</td>
                                <td>
                                    <div class="flex justify-around ">
                                        <img src="{{ Storage::url($ropa->imagenRef) }}" class="border-gray-500 border-2" width="150px" alt="">
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route('ropas.destroy', $ropa->id) }}" method="POST">

                                        <div class="flex justify-around">
                                            <a class="boton-info h-10 w-10 flex-1"
                                                href="{{ route('ropas.show', $ropa->id) }}">
                                                <img class="px-5" src="{{ asset('img/acercarse.png') }}"
                                                    alt=""></a>

                                            <a class="boton-edit h-10 w-10 flex-1 mx-2"
                                                href="{{ route('ropas.edit', $ropa->id) }}">
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
                <div class="boton my-5">
                    <a class="text-white" href="/dashboard">Volver</a>
                </div>
                {!! $ropas->links() !!}
            </div>
        </div>

    </x-admin-layout>
@endrole
