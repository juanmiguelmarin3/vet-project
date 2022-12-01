<link rel="shortcut icon" href="https://i.pinimg.com/originals/5d/5c/da/5d5cda59ca315dea67786b086b3eceb1.png" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mascotas') }}
        </h2>
    </x-slot>

    <!--
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Categories</h1>
        </section>
    </article>
    -->



    <article class="container">
        <section class="row">
            <div class="col">

                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Tipo</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mascotas as $mascota)
                        <tr>
                            <td>{{$mascota->codigo_mascota}}</td>
                            <td>{{$mascota->nombre_mascota}}</td>
                            <td>{{$mascota->edad}}</td>
                            <td>{{$mascota->tipo}}</td>


                            <td><a href="/mascotas/{{$mascota->id}}" class="btn btn-primary">Detalles</a></td>
                            <td><a href="/mascotas/{{$mascota->id}}/edit" class="btn btn-success">Editar</a></td>
                            <td>
                                <form action="/mascotas/{{$mascota->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input
                                        type="submit"
                                        value="Eliminar"
                                        class="btn btn-danger"
                                        onclick="return confirm('Seguro desea eliminarlo?')"
                                    >
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/mascotas/create" class="btn btn-success text-center">Crear Nueva Mascota</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>



