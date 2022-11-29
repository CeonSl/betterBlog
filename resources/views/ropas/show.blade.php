@role('Administrator')
    @section('title', 'Ropa')
    <x-admin-layout>
        <div class="container pb-10">
            <div class="jumbotron">

                <div class="titulo">
                    <h2> Mostrar Prenda</h2>
                </div>
                <div class="my-6 relative">
                    <figure>
                        <img src="{{ Storage::url($ropa->imagenRef) }}"
                            class="aspect-[16/9] w-full object-contain object-left">
                    </figure>
                </div>

                <label class="label">Prenda:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $ropa->prenda }}
                </div>

                <label class="label">Color:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    @foreach ($colors as $color)
                        @if ($color['id'] == $ropa->tipoColor_id)
                            {{ $color['descripcion'] }}
                        @endif
                    @endforeach
                </div>

                <label class="label">Stock:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $ropa->stock }}
                </div>

                <label class="label">Precio:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $ropa->precio }}
                </div>

                <label class="label">Talla:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    @foreach ($tallas as $talla)
                        @if ($talla['descripcion'] == $ropa->talla)
                            {{ $talla['descripcion'] }}
                        @endif
                    @endforeach
                </div>

                <label class="label">Estado:</label>
                <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                    {{ $ropa->estado }}
                </div>

                <a class="text-white boton mt-2" href="{{ route('ropas.index') }}"> Volver</a>
            </div>
        </div>
    </x-admin-layout>
@endrole
