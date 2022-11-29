@section('title', 'Dashboard')
<x-app-layout>
    <div class="header">
        <div class="w-full h-full bg-white ">
            <div>
                <h1 class="titulo flex justify-center m-0 jumbotron rounded-none p-8 ">Lista de Productos</h1>
            </div>
            <div class="grid grid-cols-5 mx-2 ">
                @foreach ($ropas as $ropa)
                    <div class=" m-3 hover:opacity-95 hover:scale-110   transition-all  duration-300 ease-out ">
                        <div class=" transition-all p-1 h-full w-70 hover:bg-black">
                            <a href="{{ route('payment', $ropa->id) }}">

                                <img src="{{ Storage::url($ropa->imagenRef) }}" class=" object-contain  overflow-hidden  transition-all " alt="">
                                <div class="grid grid-cols-2">
                                    <label class=" font-extralight  text-start pt-3 col-span-1 justify-items-start">{{ $ropa->prenda }}
                                        {{ $colors->get('descripcion', $colors->find($ropa->tipoColor_id)->descripcion) }}
                                        {{ $tallas->get('descripcion', $ropa->talla) }}</label>
    
                                    <label
                                        class="font-extralight  text-3xl pt-2 text-right col-span-1 col-start-2 justify-items-start">S/.{{ $ropa->precio }}</label>
    
                                </div>

                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
      


    </div>
</x-app-layout>
