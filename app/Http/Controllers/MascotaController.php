<?php

namespace App\Http\Controllers;

use App\Http\Requests\MascotaRequest;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        return view('mascotas.index',[
            'mascotas' => Mascota::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MascotaRequest $request)
    {
        $mascota = new Mascota();

        $mascota->codigo_mascota = $request->get('codigo_mascota');
        $mascota->nombre_mascota = $request->get('nombre_mascota');
        $mascota->edad = $request->get('edad');
        $mascota->tipo = $request->get('tipo');


        $mascota->save();

        return redirect('/mascotas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        return view('mascotas.show',[
            'mascota' => $mascota
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit', [
            'mascota' => $mascota
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MascotaRequest $request, Mascota $mascota)
    {
        $mascota->codigo_mascota = $request->get('codigo_mascota');
        $mascota->nombre_mascota = $request->get('nombre_mascota');
        $mascota->edad = $request->get('edad');
        $mascota->tipo = $request->get('tipo');


        $mascota->save();

        return redirect('/mascotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return back();
    }
}
