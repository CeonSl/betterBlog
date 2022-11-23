@role('Administrator')
@section('title', 'Nivel Parámetro')
<x-app-layout>
    <div class="container">
        <div class="jumbotron">
            <div class="my-5">
                <h2 class="titulo">Editar Parámetro</h2>
            </div>
            <div class="boton">
                <a class="text-white" href="{{ route('nivel_parametros.index') }}"> Volver</a>
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
            <form action="{{ route('nivel_parametros.store') }}" method="POST">
                @csrf
                @method('PUT')
                <label for="descripcion" class="label">Descripción:</label>
                <textarea class="textarea" style="height:150px" name="descripcion" placeholder="Descripción">{{ $nivel_parametro->descripcion }}</textarea>

                <label for="descripcion" class="label">Tipo:</label>
                <input type="text" name="tipo" class="input rounded-lg border border-gray-300"
                    value="{{ $nivel_parametro->tipo }}" placeholder="Tipo">

                <label for="descripcion" class="label">Estado:</label>
                <input type="text" name="estado" class="input rounded-lg border border-gray-300"
                    value="{{ $nivel_parametro->estado }}" placeholder="Estado">

                <div class="boton flex justify-center my-5">
                    <button type="submit" class="text-white ">Enviar</button>
            </form>
        </div>
    </div>
</x-app-layout>
@endrole