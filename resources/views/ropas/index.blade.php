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
                        <a href="{{ route('ropas.create') }}" class="boton col-span-1 text-center text-white">
                            Crear prenda
                        </a>

                        <style>
                            .hoverIcon:hover {}
                        </style>

                        <div class="col-span-2 col-start-8 grid justify-items-end mt-5 mr-2 hover:opacity-80 transition-all"
                            style="color: Tomato;">
                            <a href="{{ route('prenda/pdf') }}" target="_blank">
                                <i class="fa-regular fa-file-pdf fa-2xl  fa-bounce"
                                    style=" --fa-animation-duration: 1s; --fa-animation-iteration-count: 2;--fa-animation-timing: ease-in-out; animation-delay: 5s;"></i>
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

                <div class="my-2">
                    {!! $ropas->links() !!}
                </div>
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
                    <div :hidden="open" class="boton my-5 cursor-pointer" x-transition @click="isOpen()">
                        <a class="text-white transition-all duration-300 " onclick="graficar()">Gráficos</a>
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
                                        var obj = JSON.parse(data);

                                        var prendas = [];

                                        var prendasSola = [];

                                        var stocks = [];
                                        var stock = 0;
                                        var precios = [];
                                        var precio = 0;
                                        var divisor = 0;
                                        var promedio = 0;

                                        for (var i = 0; i < obj.length; i++) {
                                            if (!(prendasSola.includes(obj[i].prenda))) {
                                                prendasSola.push(obj[i].prenda);

                                            }
                                        }

                                        for (var i = 0; i < prendasSola.length; i++) {
                                            for (var j = 0; j < obj.length; j++) {
                                                if (obj[j].prenda == prendasSola[i]) {
                                                    stock += obj[j].stock;
                                                    precio += obj[j].precio;
                                                    divisor++;
                                                    if (j == (obj.length - 1)) {
                                                        stocks.push(stock);
                                                        promedio = precio / divisor;
                                                        precios.push(promedio);
                                                        promedio = 0;
                                                        precio = 0;
                                                        divisor = 0;
                                                    }
                                                } else if (j == (obj.length - 1)) {
                                                    console.log(obj[j].prenda + " ola")
                                                    stocks.push(stock);
                                                    promedio = precio / divisor;
                                                    precios.push(promedio);
                                                    divisor = 0;
                                                    promedio = 0;
                                                    precio = 0;
                                                    stock = 0;
                                                }
                                            }
                                        }

                                        console.log(prendasSola);
                                        console.log(stocks);


                                        console.log(precios);

                                        generarGraficaBar(prendasSola, stocks);
                                        generarGraficaDona(prendasSola, precios);
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
                                                borderWidth: 1,
                                                backgroundColor: [
                                                    'rgba(255, 99, 132, 1)',
                                                    'rgba(255, 159, 64, 1)',
                                                    'rgba(255, 205, 86, 1)',
                                                    'rgba(75, 192, 192, 1)',
                                                    'rgba(54, 162, 235, 1)',
                                                    'rgba(153, 102, 255, 1)',
                                                    'rgba(201, 203, 207, 1)'
                                                ],
                                                borderColor: [
                                                    'rgb(255, 99, 132)',
                                                    'rgb(255, 159, 64)',
                                                    'rgb(255, 205, 86)',
                                                    'rgb(75, 192, 192)',
                                                    'rgb(54, 162, 235)',
                                                    'rgb(153, 102, 255)',
                                                    'rgb(201, 203, 207)'
                                                ],
                                            }],

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
                                function generarGraficaDona(prendas, precios) {
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
