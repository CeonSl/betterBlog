@role('Administrator')
    @section('title', 'Cliente')
    <x-admin-layout>
        <div class="container">
            <div class="jumbotron">
                <div class="my-5">
                    <h2 class="titulo">Editar Cliente</h2>
                </div>
                <div class="boton">
                    <a class="text-white" href="{{ route('clientes.index') }}"> Volver</a>
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
                <form action="{{ route('clientes.update', $cliente->id) }}" method="post">
                    @csrf
                    @method('put')

                    <label for="nombres" class="label">Nombres:</label>
                    <input type="text" name="nombres" class="input rounded-lg border border-gray-300"
                        value="{{ $cliente->nombres }}" placeholder="Nombres">

                    <label for="apellidos" class="label">Apellidos:</label>
                    <input type="text" name="apellidos" class="input rounded-lg border border-gray-300"
                        value="{{ $cliente->apellidos }}" placeholder="Apellidos">


                    <label for="">Género:</label>
                    <select name="genero_id" id=""
                        class="input p-2 text-lg text-gray-900 rounded-lg border border-gray-300 ">
                        @foreach ($generos as $genero)
                            @if ($genero['id'] == $cliente->genero_id)
                                <option value="{{ $genero['id'] }}" selected>{{ $genero['descripcion'] }}</option>
                            @else
                                <option value="{{ $genero['id'] }}">{{ $genero['descripcion'] }}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="direccion" class="label">Dirección:</label>
                    <textarea class="textarea" style="height:150px" name="direccion" placeholder="Dirección">{{ $cliente->direccion }}</textarea>

                    <label for="telefono" class="label">Teléfono:</label>
                    <input type="number" name="telefono" class="input rounded-lg border border-gray-300"
                        value="{{ $cliente->telefono }}" placeholder="Teléfono">

                    <label for="correo" class="label">Correo:</label>
                    <input type="text" name="correo" class="input rounded-lg border border-gray-300"
                        value="{{ $cliente->correo }}" placeholder="Correo">

                    <label for="estado" class="label">Estado:</label>
                    <input type="text" name="estado" class="input rounded-lg border border-gray-300"
                        value="{{ $cliente->estado }}" placeholder="Estado">


                    <div class="boton flex justify-center my-5">
                        <button type="submit" class="text-white w-full">Enviar</button>
                </form>
            </div>
        </div>
    </x-app-layout>
@endrole
