@section('title', 'Dashboard')
<x-app-layout>
    <div class="header">
        <div class="w-full h-screen bg-gradient-to-br from-red-200 via-white to-blue-200 p-10">
            <div>
                <h1 class="titulo flex justify-center jumbotron mt-0">Lista de Productos</h1>
            </div>
            <div class="grid grid-cols-4 justify-around">
                @foreach ($ropas as $ropa)
                    <div class="jumbotron p-2 pb-5 w-96 hover:opacity-90 hover:-my-0 transition-all">
                        <button class="p-0">

                            <div>
                                <img src="{{ Storage::url($ropa->imagenRef) }}" class="mb-4" alt="">
                                <label class="font-extralight flex justify-start pl-4">{{ $ropa->prenda }}
                                    {{ $colors->get('descripcion', $colors->find($ropa->tipoColor_id)->descripcion) }}
                                    {{ $tallas->get('descripcion', $tallas->find($ropa->talla)->descripcion) }}</label>
                                <label class="font-extralight flex justify-center text-3xl pt-4 ">S/.{{$ropa->precio}}</label>
                
                            </div>
                        </button>
                        <div class="flex  py-4 px-16">
                            <a href="{{ route('payment',$ropa->id) }}" class="boton flex-1 text-center text-white">Comprar</a>
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
