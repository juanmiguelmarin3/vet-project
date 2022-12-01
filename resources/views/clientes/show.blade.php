
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles') }}
        </h2>
    </x-slot>
    <article class="container">
        <section class="row">
            <div class="col-12">
                <h1 class="text-center alert alert-success">{{$cliente->cedula }} - {{$cliente->nombre_cliente }}</h1>
            </div>
        </section>
        <section class="row my-4">
            <div class="col-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://www.gravatar.com/avatar/{{md5($cliente->email_hashed)}}?d=robohash&s=400" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-title">{{$cliente->nombre_cliente }} <span class="badge rounded-pill bg-success">{{$cliente->id}}</span></p>
                                <p class="card-text"><b>Cédula: </b>  {{$cliente->cedula}}</p>
                                <p class="card-text"><b>Nombre: </b>  {{$cliente->nombre_cliente}}</p>
                                <p class="card-text"><b>Apellido: </b>  {{$cliente->apellido}}</p>
                                <p class="card-text"><b>Edad: </b>  {{$cliente->edad}}</p>
                                <p class="card-text"><b>Dirección: </b>  {{$cliente->direccion}}</p>
                                <p class="card-text"><b>Teléfono: </b>  {{$cliente->telefono}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <section class="row">
                <div class="col d-grid">
                    <a href="/clientes" class="btn btn-success text-center">Menu</a>
                </div>
            </section>
        </section>
    </article>
</x-app-layout>
