<?php
$mysqli = new mysqli('localhost', 'root', '', 'veterinarias');
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar') }}
        </h2>
    </x-slot>
    <article class="container">
        <section class="row">
            <h1 class="col alert alert-success text-center">Editar {{$cita->codigo_mascota}} - {{$cita->nombre_mascota}}</h1>

        </section>
    </article>

    <article class="container">
        <section>
            <form action="/citas/{{$cita->id}}" class="row" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 col-6">
                    <label for="codigo" class="form-label">Codigo</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" value="{{old('codigo',$cita->codigo)}}">
                </div>

            <!--
                <div class="mb-3 col-6">
                    <label for="cedula" class="form-label">Cedula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" value="{{old('cedula',$cita->cedula)}}">
                </div>
            -->

                <div class="mb-3 col-3">
                    <label for="codigo" class="form-label">Cedula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" value="{{old('cedula',$cita->cedula)}}">
                </div>

                <div class="mb-3 col-3">
                    <label for="cedula" class="form-label">Cedula Cliente</label>
                    <select class="form-select" id="cedula" name="cedula">
                        <option value="0" disabled selected>{{old('cedula',$cita->cedula)}}</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM clientes");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['cedula'].' - '.$valores['nombre_cliente'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>


                <div class="mb-3 col-3">
                    <label for="nombre_cliente" class="form-label">Nombre Cliente</label>
                    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" value="{{old('nombre_cliente',$cita->nombre_cliente)}}">
                </div>

                <div class="mb-3 col-3">
                    <label for="nombre_cliente" class="form-label">Nombre Cliente</label>
                    <select class="form-select" id="nombre_cliente" name="nombre_cliente">
                        <option value="0" disabled selected>{{old('nombre_cliente',$cita->nombre_cliente)}}</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM clientes");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['nombre_cliente'].' - '.$valores['cedula'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>




                <div class="mb-3 col-3">
                    <label for="codigo_mascota" class="form-label">Codigo Mascota</label>
                    <input type="text" class="form-control" id="codigo_mascota" name="codigo_mascota" value="{{old('codigo_mascota',$cita->codigo_mascota)}}">
                </div>

                <div class="mb-3 col-3">
                    <label for="codigo_mascota" class="form-label">Codigo Mascota</label>
                    <select class="form-select" id="codigo_mascota" name="codigo_mascota">
                        <option value="0" disabled selected>{{old('codigo_mascota',$cita->codigo_mascota)}}</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM mascotas");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['codigo_mascota'].' - '.$valores['nombre_mascota'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>



                <div class="mb-3 col-3">
                    <label for="nombre_mascota" class="form-label">Nombre Mascota</label>
                    <input type="text" class="form-control" id="nombre_mascota" name="nombre_mascota" value="{{old('nombre_mascota',$cita->nombre_mascota)}}">
                </div>

                <div class="mb-3 col-3">
                    <label for="nombre_mascota" class="form-label">Nombre Mascota</label>
                    <select class="form-select" id="nombre_mascota" name="nombre_mascota">
                        <option value="0" disabled selected>{{old('nombre_mascota',$cita->nombre_mascota)}}</option>
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM mascotas");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores['id'].'">'.$valores['nombre_mascota'].' - '.$valores['codigo_mascota'].'
                        </option>';
                        }
                        ?>
                    </select>
                </div>


                <div class="mb-3 col-12 d-grid">
                    <input type="submit" value="Actualizar" class="btn btn-success text-center" value="{{$cita->center}}">
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
                        <a href="/citas" class="btn btn-success text-center">Menu</a>
                    </div>
                </section>
            </section>
        </section>
    </article>
</x-app-layout>

