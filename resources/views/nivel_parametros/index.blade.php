@role('Administrator')
    @section('title', 'Nivel Parámetro')
    <x-admin-layout>

        <div class="container ">
            <div class="jumbotron mt-10 ">
                <div id="main" class="scroll-mt-40">
                    <div>
                        <div class="my-5">
                            <h2 class="titulo">Listado de Parámetros</h2>
                            {{-- <div class="boton">
                                <a class="text-white" href="{{ route('nivel_parametros.create') }}"> Crear nuevo parámetro</a>
                            </div> --}}
                        </div>
                    </div>

                    <p class="boton">
                        <a href="#" class="text-white" onclick="clickCargar()">Cargar Parámetros</a>
                    </p>
                    <div id="table"></div>
                    <script>
                        function clickCargar() {
                            $.get("indexAll", function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);

                                var obj = JSON.parse(data);
                                console.log(obj);
                                if (status == "success") {
                                    var tabla = crearTabla(obj);
                                    $("#table").html(tabla);
                                } else {
                                    alert("Error:" + success);
                                }
                            });
                        }
                        $(document).ready(function() {
                                $().load("indexAll", function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);

                                var obj = JSON.parse(data);
                                console.log(obj);
                                if (status == "success") {
                                    console.log(status)
                                    var tabla = crearTabla(obj);
                                    $("#table").html(tabla);
                                } else {
                                    alert("Error:" + success);
                                }
                            });
                        });

                        function tabla() {
                            return ' <table class="table table-bordered mt-3"><thead> <tr><th>No</th> <th>Descripción</th> <th>Tipo</th><th>Estado</th><th width="280px">Opciones</th> </tr></thead>';
                        }

                        function crearTabla(obj) {
                            var tblContenido = crearRegistros(obj);
                            return tabla() + tblContenido + "</table>";

                        }



                        function crearRegistros(obj) {
                            var contenido = "";

                            $.each(obj, function(key, value) {
                                if (value.id == null) {

                                } else {
                                    var i = 0;
                                    i++;
                                    contenido += '<tbody><tr><td>' + value.id + '</td><td>' + value.descripcion + '</td><td>' +
                                        value.tipo + '</td><td>' + value.estado + '</td>' + '<td>' + crearBotones(value.id) +
                                        '</td></tr></tbody>';

                                }
                            });
                            return contenido;
                        }


                        function crearBotones(id) {
                            console.log(id);

                            return ` <form action="{{ url('nivel_parametros/delete/`+id+`') }}" method="GET">` +
                                '<div class="flex justify-around">' +
                                '<a class="boton-info h-10 w-10 flex-1" href="">' +
                                '<img class="px-5" src = "{{ asset('img/acercarse.png') }}" alt = ""></a>' +
                                '<a class = "boton-edit h-10 w-10 flex-1 mx-2"href = "" ><img class = "px-5" src = "{{ asset('img/editar.png') }}" alt = "" ></a>' +
                                '@csrf' +
                                '<button type = "submit" class = "boton-eliminar bg-red-400 h-10 w-10 flex-1">' +
                                '<img class = "px-5" src = "{{ asset('img/eliminar.png') }}" alt = "" > </button> </div> </form>';
                        }
                    </script>
                    {{-- 
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
                    <div class="boton my-5">
                        <a class="text-white" href="/dashboard">Volver</a>
                    </div> --}}
                </div>
                {{-- {!! $nivel_parametros->links() !!} --}}

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

                {{-- <div x-data="data()" x-init="start()" x-transition>
                    <div :hidden="open" class="boton my-5" x-transition @click="isOpen()">
                        <a class="text-white transition-all duration-300">Gráficos</a>
                    </div>
                    <div x-show="open" class="container transition-all duration-300" x-transition @click.away="close()">
                        <div class="jumbotron mt-10 ">
                            <div class="">
                                <div class="titulo text-left">Gráfico Barras</div>
                                <div style="width: 800px; ">
                                    <canvas id="myChart"></canvas>
                                </div>
                                <div class="titulo text-left mt-20 ">Gráfico Donut</div>
                                <div style="width: 600px; height: 600px;">
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>

                            <script>
                                $.ajax({
                                    url:'http://127.0.0.1:8000/nivel_parametros',
                                    method: 'POST',
                                    data:{}
                                })
                                var arreglo = JSON.parse({{ $nivel_parametrosJson }});
                                console.log(arreglo);
                                var tipos = [];
                                var valores = [];
                                for (var x = 0; x < arreglo.length; x++) {
                                    tipos.push(arreglo[x].tipo);
                                    valores.push(arreglo[x].descripcion);
                                }
                                generarGrafica();

                                function generarGrafica() {
                                    const ctx = document.getElementById('myChart');
                                    new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: tipos,
                                            datasets: [{
                                                label: '# of Votes',
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
                                const ctx2 = document.getElementById('myChart2');

                                new Chart(ctx2, {
                                    type: 'doughnut',
                                    data: {
                                        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                        datasets: [{
                                            label: '# of Votes',
                                            data: [12, 19, 3, 5, 2, 3],
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
                            </script>
                        </div>
                        <div class="boton">
                            <a href="#main" class="text-white">volver</a>
                        </div>

                    </div>

                </div> --}}
            </div>
        </div>


    </x-admin-layout>
@endrole
