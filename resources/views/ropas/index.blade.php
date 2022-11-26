@role('Administrator')
    @section('title', 'Ropa')
    <x-admin-layout>
        <div class="container pb-10">
            <div class="jumbotron mt-10">
                <div id="main" class="scroll-mt-40">
                    <div class="my-5 ">
                        <h2 class="titulo">Listado de Prendas</h2>

                    </div>
                    <div class="grid grid-cols-8">
                        <div class="boton col-span-1 text-center">
                            <a class="text-white " href="{{ route('ropas.create') }}" > Crear prenda</a>
                        </div>

                        <style>
                            .hoverIcon:hover{
                               
                            }
                        </style>

                        <div class="col-span-2 col-start-8 grid justify-items-end mt-5 mr-2 hover:opacity-80 transition-all" style="color: Tomato;">
                            <a href="{{route('prenda/pdf')}}" target="_blank">
                                <i class="fa-regular fa-file-pdf fa-2xl  fa-bounce" style=" --fa-animation-duration: 1s; --fa-animation-iteration-count: 2;--fa-animation-timing: ease-in-out; animation-delay: 5s;" ></i>
                            </a>
                        </div>
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
                                <td>{{ isset($ropa->talla) ? $tallas->get('descripcion', $ropa->talla) : '' }}</td>
                                <td>{{ $ropa->estado }}</td>
                                <td>
                                    <div class="flex justify-around ">
                                        <img src="{{ Storage::url($ropa->imagenRef) }}" class="border-gray-500 border-2"
                                            width="150px" alt="">
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

                {!! $ropas->links() !!}
                <script>
                    function data() {
                        return {
                            open: null,
                            start() {
                                open: false
                            },
                            isOpen() {
                                this.open = !this.open
                            },
                            close() {
                                main = true,
                                    this.open = false
                            }
                        }
                    }
                </script>

                <div x-data="data()" x-init="start()" x-transition>
                    <div :hidden="open" class="boton my-5" x-transition @click="isOpen()">
                        <a class="text-white transition-all duration-300" onclick="graficar()">Gráficos</a>
                    </div>
                    <div x-show="open" class="container transition-all duration-300" x-transition @click.away="close()">
                        <div class="jumbotron mt-10 ">
                            <div class="">
                                <div class="titulo text-left">Unidades totales por prenda</div>
                                <div style="width: 800px; ">
                                    <canvas id="myChart"></canvas>
                                </div>
                                <div class="titulo text-left mt-20 ">Promedio de precios por prenda</div>
                                <div style="width: 600px; height: 600px;">
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>

                            <script>
                                function graficar() {
                                    $.get("prendas/indexAll", function(data, status) {
                                        $.get("parametros/indexAll", function(dataPar, statusPar) {
                                            var obj = JSON.parse(data);

                                            var objParametro = JSON.parse(dataPar);
                                            console.log(obj);
                                            var tipos = [];
                                            var valores = [];
                                            var prendas = [];
                                            var precios = [];
                                            var stock = 0;
                                            var precio = 0;
                                            for (var x = 0; x < obj.length; x++) {

                                                if (obj[x].prenda === ((x < obj.length - 1) ? (obj[x + 1].prenda) : false)) {
                                                    console.log(obj[x].prenda + " " + x);
                                                    console.log('entre')
                                                    stock += obj[x].stock;
                                                    console.log(stock);
                                                } else if (obj[x].prenda === ((x > 1) ? (obj[x - 1].prenda) : false)) {
                                                    console.log('entre al falso')
                                                    stock += obj[x].stock;
                                                    valores.push(stock);
                                                    tipos.push(obj[x].prenda);
                                                    stock = 0;
                                                    console.log(valores);
                                                    console.log(tipos);
                                                }

                                            }

                                            var divisor = 0;
                                            var promedio = 0;

                                            for (var x = 0; x < obj.length; x++) {

                                                if (obj[x].prenda === ((x < obj.length - 1) ? (obj[x + 1].prenda) : false)) {
                                                    precio += obj[x].precio;
                                                    divisor++;
                        
                                                } else if (obj[x].prenda === ((x > 1) ? (obj[x - 1].prenda) : false)) {
                                                    precio += obj[x].precio;
                                                    divisor++;
                                                    promedio = precio / divisor; 
                                                    precios.push(promedio);
                                                    prendas.push(obj[x].prenda);
                                                    precio = 0;
                                                    divisor = 0;
                                                    console.log(precios);
                                                    console.log(prendas);
                                                }

                                            }

                                            generarGraficaBar(tipos, valores);
                                            generarGraficaDona(prendas,precios);
                                        })
                                    })

                                }

                                function generarGraficaBar(tipos, valores) {
                                    const ctx1 = document.getElementById('myChart');

                                    new Chart(ctx1, {
                                        type: 'bar',
                                        data: {
                                            labels: tipos,
                                            datasets: [{
                                                label: 'Unidades ',
                                                data: valores,
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                }
                            </script>


                            <script>
                                function generarGraficaDona(prendas,precios) {
                                    const ctx2 = document.getElementById('myChart2');

                                    new Chart(ctx2, {
                                        type: 'doughnut',
                                        data: {
                                            labels: prendas,
                                            datasets: [{
                                                label: 'promedio',
                                                data: precios,
                                                borderWidth: 1
                                            }]
                                        },
                                        options: {
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    });
                                }
                            </script>
                        </div>
                        <div class="boton">
                            <a href="#main" class="text-white">volver</a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </x-admin-layout>
@endrole
