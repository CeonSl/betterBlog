@role('Administrator')
    @section('title', 'Ropa')
    <x-admin-layout>

        <div class="container pb-10">
            <div class="jumbotron ">
                <div class="my-5">
                    <h2 class="titulo">Agregar nueva Ropa</h2>
                </div>
                <div class="boton">
                    <a class="text-white" href="{{ route('ropas.index') }}"> Volver</a>
                </div>


                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative my-4" role="alert">
                        <strong class="font-bold">Whoops!</strong>
                        <span class="block sm:inline">Something seriously bad happened.</span>
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <title>Close</title>
                                <path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                            </svg>
                        </span>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                <form action="{{ route('ropas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class=" relative my-6 ">
                        <figure class="">
                            <img src="{{ asset('img/CAMARA.jpg') }}" id="imagenRef"
                                class="aspect-[16/9] w-full object-contain object-left ">
                        </figure>
                        <div class="absolute top-96 right-1/4">
                            <label
                                class="flex items-center px-4 py-2 bg-white rounded-lg cursor-pointer hover:bg-opacity-50">

                                <i class="fa-solid fa-camera mr-2"></i>

                                Ingresa una imagen
                                <input type="file" accept="image/" id="imagenRef" name="imagenRef"
                                    onchange="previewImage(event, '#imagenRef')" class="hidden">
                            </label>
                        </div>
                    </div>

                    <label for="prenda" class="label">Prenda:</label>
                    <input type="text" name="prenda" class="input rounded-lg border border-gray-300"
                        value="{{ old('prenda') }}" placeholder="Prenda">

                    <label for="tipoColor_id" class="label">Color:</label>
                    <select name="tipoColor_id" id=""
                        class="input p-2 text-lg text-gray-900 rounded-lg border border-gray-300 ">
                        @foreach ($colors as $color)
                            <option value="{{ $color['id'] }}">{{ $color['descripcion'] }}</option>
                        @endforeach
                    </select>

                    <label for="stock" class="label">Stock:</label>
                    <input type="text" name="stock" class="input rounded-lg border border-gray-300"
                        value="{{ old('stock') }}" placeholder="Stock">

                    <label for="precio" class="label">Precio:</label>
                    <input type="number" min="1" step="any" name="precio"
                        class="input rounded-lg border border-gray-300" value="{{ old('precio') }}" placeholder="Precio">

                    <label for="talla" class="label">Talla:</label>
                    <select name="talla" id=""
                        class="input p-2 text-lg text-gray-900 rounded-lg border border-gray-300 ">
                        @foreach ($tallas as $talla)
                            <option value="{{ $talla['id'] }}">{{ $talla['descripcion'] }}</option>
                        @endforeach
                    </select>

                    <label for="estado" class="label">Estado:</label>
                    <input type="text" name="estado" class="input rounded-lg border border-gray-300"
                        value="{{ old('estado') }}" placeholder="Estado">

                    <div class="boton flex justify-center my-5">
                        <button type="submit" class=" text-white w-full">Enviar</button>
                </form>
            </div>
            <script>
                function previewImage(event, querySelector) {
                    const input = event.target;

                    $imgPreview = document.querySelector(querySelector);

                    if (!input.files.length) return

                    file = input.files[0];

                    objectURL = URL.createObjectURL(file);
                    $imgPreview.src = objectURL
                }
            </script>
    </x-app-layout>
@endrole
