<?php

namespace App\Http\Controllers;

use App\Http\Requests\CitasRequest;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index()
    {
        return view('citas.index',[
            'citas' => Cita::with('clientes')->get()

        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('citas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CitasRequest $request)
    {
        $cita= new Cita();

        $cita->codigo = $request->get('codigo');
        $cita->cedula = $request->get('cedula');
        $cita->nombre_cliente = $request->get('nombre_cliente');
        $cita->codigo_mascota = $request->get('codigo_mascota');
        $cita->nombre_mascota = $request->get('nombre_mascota');

        $cita->save();

        return redirect('/citas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        return view('citas.show',[
            'cita' => $cita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        return view('citas.edit', [
            'cita' => $cita
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CitasRequest $request, Cita $cita)
    {
        $cita->codigo = $request->get('codigo');
        $cita->cedula = $request->get('cedula');
        $cita->nombre_cliente = $request->get('nombre_cliente');
        $cita->codigo_mascota = $request->get('codigo_mascota');
        $cita->nombre_mascota = $request->get('nombre_mascota');

        $cita->save();

        return redirect('/citas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        $cita->delete();
        return back();
    }
}
