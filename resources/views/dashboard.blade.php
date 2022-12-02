@section('title', 'Dashboard')
<x-app-layout>
    <div class="header">
        <div class="w-full h-full  bg-gradient-to-r from-red-300 to-sky-300  ">
            <div>
                <h1 class="titulo flex justify-center m-0 jumbotron rounded-none p-8 bg-white ">Lista de Productos</h1>
            </div>
            <div class="grid grid-cols-5   place-items-center border-8 border-white">
                @foreach ($ropas as $ropa)
                    <div class=" p-2 m-2 hover:opacity-95 hover:scale-110  bg-white hover:bg-transparent rounded-lg  transition-all  duration-300 ease-out ">
                        <div class=" transition-all p-1 h-full w-70 ">
                            <a href="{{ route('payment', $ropa->id) }}">

                                <img src="{{ Storage::url($ropa->imagenRef) }}" class="row-span-2  object-contain h-96 w-full  overflow-hidden  transition-all " alt="">
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
