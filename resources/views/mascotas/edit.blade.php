<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }}
        </h2>
    </x-slot>
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Editar {{$mascota->codigo_mascota}} - {{$mascota-> nombre_mascota}}</h1>
        </section>
    </article>

    <article class="container">
        <section>
            <form action="/mascotas/{{$mascota->id}}" class="row" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 col-6">
                    <label for="codigo_mascota" class="form-label">Codigo</label>
                    <input type="text" class="form-control" id="codigo_mascota" name="codigo_mascota" value="{{old('codigo_mascota',$mascota->codigo_mascota)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="nombre_mascota" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" value="{{old('nombre_mascota',$mascota->nombre_mascota)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="text" class="form-control" id="edad" name="edad" value="{{old('edad',$mascota->edad)}}">
                </div>
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Tipo</label>
                    <div class="input-group mb-3">
                        <select class="form-select" id="tipo" name="tipo">
                            <option class="fst-italic text-muted" disabled selected>Seleccionar...</option>
                            <option value="Perro" @if($mascota->tipo == "Perro")selected @endif >Perro</option>
                            <option value="Gato" @if($mascota->tipo == "Gato")selected @endif>Gato</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Actualizar" class="btn btn-success text-center" value="{{$mascota->center}}">
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
                        <a href="/mascotas" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>

