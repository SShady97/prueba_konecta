<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adviser;

class AdviserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advisers = Adviser::all();
        return $advisers;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adviser = new Adviser();
        $adviser->nombre = $request->nombre;
        $adviser->cedula = $request->cedula;
        $adviser->telefono = $request->telefono;
        $adviser->fecha_nacimiento = $request->fecha_nacimiento;
        $adviser->genero = $request->genero;
        $adviser->cliente = $request->cliente;
        $adviser->sede = $request->sede;
        $adviser->usuario = $request->usuario;
        $adviser->edad = $request->edad;

        $adviser->save();

        return response()->json([
            'message' => '¡Asesor registrado exitosamente!',
            'adviser' => $adviser
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $adviser = Adviser::findOrFail($request->id);
        $adviser->nombre = $request->nombre;
        $adviser->cedula = $request->cedula;
        $adviser->telefono = $request->telefono;
        $adviser->fecha_nacimiento = $request->fecha_nacimiento;
        $adviser->genero = $request->genero;
        $adviser->cliente = $request->cliente;
        $adviser->sede = $request->sede;
        $adviser->usuario = $request->usuario;
        $adviser->edad = $request->edad;

        $adviser->save();

        return response()->json([
            'message' => '¡Asesor editado exitosamente!',
            'adviser' => $adviser
        ], 201);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $adviser = Adviser::destroy($request->id);

        return response()->json([
            'message' => '¡Asesor eliminado exitosamente!'
        ], 201);
    }
}
