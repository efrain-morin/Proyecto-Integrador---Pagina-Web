<?php

namespace App\Http\Controllers;

use App\inmueble;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuarios =DB::table('users')->where('idTipoUsuario','2')->get();
        $inmueble = inmueble::all();
        return view('/building',[
            'edificios'=>$inmueble,
            'administradores'=>$usuarios
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
        $inmueble = new inmueble;
        $inmueble->calle = $request->get('calle');
        $inmueble->municipio = $request->get('municipio');
        $inmueble->colonia = $request->get('colonia');
        $inmueble->codigoPostal = $request->get('cp');
        $inmueble->estado = $request->get('estado');
        $inmueble->nombreEdificio = $request->get('nomEdificio');
        $inmueble->fotoEdificio = $request->foto->store('imagenes','public');
        $inmueble->save();
        return redirect()->route('edificios.index');
    }

    /**
     * 
     * Display the specified resource.
     *
     * @param  \App\inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function show(inmueble $inmueble)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function edit(inmueble $inmueble)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inmueble = inmueble::findOrFail($id);
        if($request->get('admin') != "-1")
        {
            $usuario = user::findOrFail($request->get('admin'));
            $usuario->idInmueble = $inmueble->id;
            $usuario->save();
        }
        if(is_null($request->get('foto')) == false)
            $inmueble->fotoEdificio = $request->foto->store('imagenes','public');
        $inmueble->calle = $request->get('calle');
        $inmueble->municipio = $request->get('municipio');
        $inmueble->colonia = $request->get('colonia');
        $inmueble->codigoPostal = $request->get('cp');
        $inmueble->estado = $request->get('estado');
        $inmueble->nombreEdificio = $request->get('nomEdificio');
        $inmueble->save();
        $inmueble = inmueble::all();
        return redirect()->route('edificios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inmueble  $inmueble
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inmueble = inmueble::findOrFail($id);
        $usuarios = $inmueble->regresaUsuarios;
        foreach($usuarios as $us)
            $us->delete();
        $inmueble->delete();
        return redirect()->route('edificios.index');
    }

    public function regresaInmueble($id)
    {
        $inmueble = inmueble::findOrFail($id);
        return view('/register-admin',[
            'edificio'=>$inmueble
        ]);
    }
}
