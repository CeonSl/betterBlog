<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TABLA DE PRENDAS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #d45741;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #d45741;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>

<body>
    <header>
        <p style="margin: 20px 1px; text-align: center; font-size: 25px"><strong >REGISTRO DE PRENDAS</strong></p>
    </header>
    <main>
    
        <div class="container">
            <table class="table table-striped text-center" style="margin-top: 68px">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Prenda</th>
                        <th scope="col">Color</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Talla</th>
                        <th scope="col">Estado</th>
                        {{-- <th scope="col">Imagen</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ropas as $ropa)
                        <tr>
                            {{ $i = 0 }}
                            <td>{{ ++$i }}</td>
                            <td>{{ $ropa->prenda }}</td>
                            <td>{{ isset($ropa->tipoColor_id) ? $colors->get('descripcion', $colors->find($ropa->tipoColor_id)->descripcion) : '' }}
                            </td>
                            <td>{{ $ropa->stock }}</td>
                            <td>{{ $ropa->precio }}</td>
                            <td>{{ isset($ropa->talla) ? $tallas->get('descripcion', $ropa->talla) : '' }}</td>
                            <td>{{ $ropa->estado }}</td>
                            {{-- <td>
                                <div class="flex justify-around ">
                                    <img src="{{ asset('storage/ropas/$ropa->imagenRef') }}"
                                        class="border-gray-500 border-2" width="150px" alt="">
                                </div>
                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer >
       <p style="margin: 15px 1px">
         Instagram: <a href="https://www.instagram.com/valentines_plussize/?next=%2Fvalentines_plussize%2F" target="_blank">valentines_plussize</a>
       </p>
    </footer>
</body>

</html>
