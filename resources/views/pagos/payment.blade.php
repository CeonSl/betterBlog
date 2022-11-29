@section('title', 'Pago')
<x-app-layout>

    @php
        // SDK de Mercado Pago
        require base_path('vendor/autoload.php');
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));
        
        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();
        
        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->id = $ropa->id;
        $item->title = $ropa->prenda . ' ' . $colors->get('descripcion', $colors->find($ropa->tipoColor_id)->descripcion) . ' ' . $tallas->get('descripcion', $ropa->talla);
        $item->quantity = 1;
        $item->unit_price = $ropa->precio;
        $preference->items = [$item];
        
        $preference->save();
        
    @endphp


    <div class="w-full h-screen bg-white p-10">
        <div class="jumbotron m-6 ">
            <div class="flex justify-around">
                <div class="jumbotron mt-0 flex-row w-4/12 j p-2 bg-white">
                    <div class="grid grid-rows-2 grid-cols-4 shadow-sm p-2 bg-white">
                        <div class="row-span-2 col-span-2 col-start-1 row-start-1"><img
                                src="{{ Storage::url($ropa->imagenRef) }}" class="h-full w-full shadow-2xl" alt="">
                        </div>
                        <div class="row-span-1 text-center pt-4"><label class="block text-justify pl-5">Prenda:
                                <strong>{{ $ropa->prenda }}</strong></label>
                            <label class="block text-justify pl-5 pt-3"> Color: <strong>
                                    {{ $colors->get('descripcion', $colors->find($ropa->tipoColor_id)->descripcion) }}</strong></label>
                            <label class="block text-justify pl-5 pt-3"> Talla: <strong>
                                    {{ $tallas->get('descripcion', $tallas->get('descripcion', $ropa->talla)) }}</strong></label>
    
                        </div>
    
                        <div class="row-span-1 row-start-2 col-span-1 col-start-3 text-justify pl-5 pt-3 text-3xl relative">
                            <label class="absolute bottom-0">Precio: <strong>S/. {{ $ropa->precio }}</strong></label>
                        </div>
    
                    </div>
                </div>
    
                <div class="jumbotron  w-2/12 h-1/2 bg-white p-3 ">
                    <div class="grid grid-rows-2 grid-cols-4 shadow rounded-lg p-3 ">
                        <div class="col-span-1 row-span-2 row-start-1 col-start-1">
                            <img src="{{ asset('img/mercadopago.png') }}" width="50px" alt="">
                        </div>
                        <div class="cho-container h-full ml-2 mt-2 col-span-3 row-span-2 row-start-1 col-start-2">
    
                        </div>
                    </div>
                </div>
    
            </div>
            <div class=" mt-10 grid grid-cols-8 ">
                    <a href="{{ route('dashboard') }}" class="text-white boton col-span-1 col-start-2 text-center">Visualizar prendas</a>
            </div>
        </div>


    </div>

    <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script>
        const mp = new MercadoPago("TEST-93670b95-e49f-41b4-8b0c-e32da55b901e", {
            // {{ config('services.mercadopago.key') }}
            locale: 'es-PE'
        });


        mp.checkout({
            preference: {
                id: '{{ $preference->id }}'
            },
            render: {
                container: '.cho-container',
                label: 'Finalizar compra',
            }
        });
    </script>

</x-app-layout>
