<?php
$mysqli = new mysqli('localhost', 'root', '', 'veterinarias');
?>



<link rel="shortcut icon" href="https://i.pinimg.com/originals/5d/5c/da/5d5cda59ca315dea67786b086b3eceb1.png" />

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Citas') }}
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
                        <th>Cedula Cliente</th>
                        <th>Nombre Cliente</th>
                        <th>Codigo Mascota</th>
                        <th>Nombre Mascota</th>
                        <th>Detalles</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($citas as $cita)
                        <tr>


                            <td>{{$cita->codigo}}</td>
                            <td>{{$cita->cedula}}</td>
                            <td>{{$cita->nombre_cliente}}</td>
                            <td>{{$cita->codigo_mascota}}</td>
                            <td>{{$cita->nombre_mascota}}</td>


                            <td><a href="/citas/{{$cita->id}}" class="btn btn-primary">Detalles</a></td>
                            <td><a href="/citas/{{$cita->id}}/edit" class="btn btn-success">Editar</a></td>
                            <td>
                                <form action="/citas/{{$cita->id}}" method="POST">
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
                    <a href="/citas/create" class="btn btn-success text-center">Crear Nueva Cita</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>



