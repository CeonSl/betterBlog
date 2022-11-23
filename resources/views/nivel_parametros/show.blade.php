@role('Administrator')
@section('title', 'Nivel Parámetro')
<x-app-layout>
    <div class="container">
        <div class="jumbotron">

            <div class="titulo">
                <h2> Mostrar Parámetro</h2>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="descripcion" class="label">Descripción:</label>
                        <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                            {{ $nivel_parametro->descripcion }}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="descripcion" class="label">Tipo:</label>
                        <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                            {{ $nivel_parametro->tipo }}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="descripcion" class="label">Estado:</label>
                        <div class="bg-gray-50 border border-gray-300 rounded-md p-2">
                            {{ $nivel_parametro->estado }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="boton mt-2">
                <a class="text-white" href="{{ route('nivel_parametros.index') }}"> Volver</a>
            </div>
        </div>
    </div>
</x-app-layout>
@endrole