<link rel="shortcut icon" href="https://i.pinimg.com/originals/5d/5c/da/5d5cda59ca315dea67786b086b3eceb1.png" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
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
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->cedula}}</td>
                            <td>{{$cliente->nombre_cliente}}</td>
                            <td>{{$cliente->apellido}}</td>
                            <td>{{$cliente->edad}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>{{$cliente->telefono}}</td>

                            <td><a href="/clientes/{{$cliente->id}}" class="btn btn-primary">Detalles</a></td>
                            <td><a href="/clientes/{{$cliente->id}}/edit" class="btn btn-success">Editar</a></td>
                            <td>
                                <form action="/clientes/{{$cliente->id}}" method="POST">
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
                    <a href="/clientes/create" class="btn btn-success text-center">Crear Nuevo Cliente</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>


