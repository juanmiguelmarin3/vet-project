<?php
$mysqli = new mysqli('localhost', 'root', '', 'veterinarias');
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles') }}
        </h2>
    </x-slot>
    <article class="container">
        <section class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">{{$cita->codigo_mascota}} - {{$cita->cedula }}</h1>
            </div>
        </section>
        <section class="row my-4">
            <div class="col-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.gravatar.com/avatar/{{md5($cita->email_hashed)}}?d=robohash&s=400" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-title">{{$cita->codigo }} {{$cita->nombre_mascota}} <span class="badge rounded-pill bg-success">{{$cita->nombre_mascota}}</span></p>
                                <p class="card-text"><b>Codigo:</b>{{$cita->cedula}}</p>
                                <p class="card-text"><b>Cedula Propietario: </b>  {{$cita->cedula}}</p>
                                <p class="card-text"><b>Nombre Propietario: </b>  {{$cita->nombre_cliente}}</p>
                                <p class="card-text"><b>Codigo Mascota: </b>  {{$cita->codigo_mascota}}</p>
                                <p class="card-text"><b>Nombre Mascota: </b>  {{$cita->nombre_mascota}}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/citas" class="btn btn-success text-center">Menu</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>

