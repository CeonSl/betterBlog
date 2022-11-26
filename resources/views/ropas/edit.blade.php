@role('Administrator')
    @section('title', 'Ropa')
    <x-admin-layout>
        <div class="container">
            <div class="jumbotron">
                <div class="my-5">
                    <h2 class="titulo">Editar Prenda</h2>
                </div>
                <div class="boton">
                    <a class="text-white" href="{{ route('ropas.index') }}"> Volver</a>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Hay problemas con los datos ingresados.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif




                <form action="{{ route('ropas.update', $ropa->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="my-6 relative">
                        <figure>
                            <img src="{{ Storage::url($ropa->imagenRef) }}" id="imgPreview" class="aspect-[16/9] w-full object-contain object-left">
                        </figure>
    
                        <div class="absolute top-96 right-1/4">
                            <label class="flex items-center px-4 py-2 bg-white rounded-lg cursor-pointer hover:bg-opacity-50">
    
                                <i class="fa-solid fa-camera mr-2"></i>
    
                                Actualizar Imagen
                                <input type="file" accept="image/" name="imagenRef" onchange="previewImage(event, '#imgPreview')" class="hidden">
                            </label>
                        </div>
    
                    </div>

                    <label for="prenda" class="label">Prenda:</label>
                    <input type="text" name="prenda" class="input rounded-lg border border-gray-300"
                        value="{{ $ropa->prenda }}" placeholder="Prenda">

                    <label for="tipoColor_id" class="label">Color:</label>
                    <select name="tipoColor_id" id=""
                        class="input p-2 text-lg text-gray-900 rounded-lg border border-gray-300 ">
                        @foreach ($colors as $color)
                            @if ($color['id'] == $ropa->tipoColor_id)
                                <option value="{{ $color['id'] }}" selected>{{ $color['descripcion'] }}</option>
                            @else
                                <option value="{{ $color['id'] }}">{{ $color['descripcion'] }}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="stock" class="label">Stock:</label>
                    <input type="text" name="stock" class="input rounded-lg border border-gray-300"
                        value="{{ $ropa->stock }}" placeholder="Stock">

                    <label for="precio" class="label">Precio:</label>
                    <textarea class="textarea  rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" type="number" min="1" step="any" style="height:150px"  name="precio" placeholder="Precio">{{ $ropa->precio }}</textarea>

                    <label for="talla" class="label">Talla:</label>
                    <select name="talla" id=""
                        class="input p-2 text-lg text-gray-900 rounded-lg border border-gray-300 ">
                        @foreach ($tallas as $talla)
                            @if ($talla['descripcion'] == $ropa->talla)
                                <option value="{{ $talla['descripcion'] }}" selected>{{ $talla['descripcion'] }}</option>
                            @else
                                <option value="{{ $talla['descripcion'] }}">{{ $talla['descripcion'] }}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="estado" class="label">Estado:</label>
                    <input type="text" name="estado" class="input rounded-lg border border-gray-300"
                        value="{{ $ropa->estado }}" placeholder="Estado">
                    <div class="boton flex justify-center my-5">
                        <button type="submit" class="text-white w-full">Enviar</button>
                </form>
            </div>
        </div>

        <script>
            function previewImage(event, querySelector){
                const input = event.target;

                $imgPreview = document.querySelector(querySelector);

                if(!input.files.length) return

                file = input.files[0];

                objectURL = URL.createObjectURL(file);
                $imgPreview.src = objectURL
            }
        </script>
    </x-app-layout>
@endrole
