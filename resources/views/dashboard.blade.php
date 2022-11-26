@section('title', 'Dashboard')
<x-app-layout>
    <div class="header">
        <div class="w-full h-screen bg-gradient-to-br from-red-200 via-white to-blue-200 p-10">
            <div>
                <h1 class="titulo flex justify-center jumbotron ">Lista de Productos</h1>
            </div>
            <div class="grid grid-cols-5 ">
                @foreach ($ropas as $ropa)
                <div class="jumbotron p-3 hover:opacity-90 hover:-my-2 transition-all ">
                    <div class=" h-full w-70  ">

                        <img src="{{ Storage::url($ropa->imagenRef) }}"
                            class="h-72 w-72 object-contain ml-0.5"
                            alt="">
                        <label class="font-extralight block text-center pt-3">{{ $ropa->prenda }}
                            {{ $colors->get('descripcion', $colors->find($ropa->tipoColor_id)->descripcion) }}
                            {{ $tallas->get('descripcion', $ropa->talla) }}</label>

                        <label
                            class="font-extralight  text-3xl block pt-2 text-center">S/.{{ $ropa->precio }}</label>

                        <div class="flex justify-center mx-5 pt-5">
                            <a href="{{ route('payment', $ropa->id) }}"
                                class="boton flex-1 text-center text-white">Comprar</a>
                        </div>

                </div>
                </div>
                    
                @endforeach
            </div>
        </div>
        <div class="w-full h-screen bg-gradient-to-bl from-white via-blue to-red-200 p-10"></div>
        <div class="w-full h-screen bg-blue-100"></div>
        <div class="w-full h-screen bg-gray-100"></div>


    </div>
</x-app-layout>
