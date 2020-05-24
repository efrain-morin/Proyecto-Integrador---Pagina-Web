<?php

namespace App\Http\Controllers;

use App\departamento;
use Illuminate\Http\Request;
use App\inmueble;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $departamentos = departamento::all();
        return view('/apartments',[
            'departamentos'=>$departamentos
        ]);
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
        //
        $departamento = new departamento;
        $departamento->piso = $request->get('piso');
        $departamento->numero = $request->get('numero');
        $departamento->idInmueble1 = $request->get('edificio');
        $departamento->save();
        return  redirect()->route('Departamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function show(departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function edit(departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, departamento $departamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\departamento  $departamento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dep = departamento::findOrFail($id);
        $usuarios = $dep->regresaUsuarios;
        foreach($usuarios as $us)
            $us->delete();
        $dep->delete();
        return  redirect()->route('Departamentos.index');
    }

    public function vistaAltaInquilino($id)
    {
        $departamento = departamento::findOrFail($id);
        return view('/register-admin',[
            'departamento'=>$departamento
        ]);
    }
}
