<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }}
        </h2>
    </x-slot>
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Editar {{$cliente->cedula}} - {{$cliente->nombre_cliente}}</h1>
        </section>
    </article>

    <article class="container">
        <section>
            <form action="/clientes/{{$cliente->id}}" class="row" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 col-6">
                    <label for="cedula" class="form-label">Cedula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" value="{{old('cedula',$cliente->cedula)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="nombre_cliente" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" value="{{old('nombre_cliente',$cliente->nombre_cliente)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" value="{{old('apellido',$cliente->apellido)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="edad" name="edad" value="{{old('edad',$cliente->edad)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{old('direccion',$cliente->direccion)}}">
                </div>

                <div class="mb-3 col-6">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono',$cliente->telefono)}}">
                </div>
                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Actualizar" class="btn btn-success text-center" value="{{$cliente->center}}">
                </div>
            </form>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <section>
                <section class="row">
                    <div class="col d-grid">
                        <a href="/clientes" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>
