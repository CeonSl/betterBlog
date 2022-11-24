@role('Administrator')
    @section('title', 'Cliente')
    <x-admin-layout>

        <div class="container  pb-10">
            <div class="jumbotron ">
                <div class="my-5">
                    <h2 class="titulo">Agregar nuevo Cliente</h2>
                </div>
                <div class="boton">
                    <a class="text-white" href="{{ route('clientes.index') }}"> Volver</a>
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

                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf

                    <label for="nombres" class="label">Nombres:</label>
                    <input type="text" name="nombres" class="input rounded-lg border border-gray-300"
                        value="{{ old('nombres') }}" placeholder="Nombres">

                    <label for="apellidos" class="label">Apellidos:</label>
                    <input type="text" name="apellidos" class="input rounded-lg border border-gray-300"
                        value="{{ old('apellidos') }}" placeholder="Apellidos">

                    <label for="genero_id" class="label">Género:</label>
                    <select name="genero_id" id="" class="input p-2 text-lg text-gray-900 rounded-lg border border-gray-300 ">
                        @foreach ($generos as $genero)
                            <option value="{{ $genero['id'] }}">{{ $genero['descripcion'] }}</option>
                        @endforeach
                    </select>

                    <label for="direccion" class="label">Dirección:</label>
                    <textarea class="textarea" style="height:150px" name="direccion" placeholder="Dirección">{{ old('direccion') }}</textarea>

                    <label for="telefono" class="label">Teléfono:</label>
                    <input type="number" name="telefono" class="input rounded-lg border border-gray-300"
                        value="{{ old('telefono') }}" placeholder="Teléfono">

                    <label for="correo" class="label">Correo:</label>
                    <input type="text" name="correo" class="input rounded-lg border border-gray-300"
                        value="{{ old('correo') }}" placeholder="Correo">
                        
                    <label for="estado" class="label">Estado:</label>
                    <input type="text" name="estado" class="input rounded-lg border border-gray-300"
                        value="{{ old('estado') }}" placeholder="Estado">

                    <div class="boton flex justify-center my-5">
                        <button type="submit" class="text-white w-full ">Enviar</button>
                </form>
            </div>
    </x-app-layout>
@endrole
