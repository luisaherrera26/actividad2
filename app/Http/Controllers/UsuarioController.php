<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = usuario::All();
        return view('usuarios.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario= new usuario;
        
        $usuario->id =$request->id;
        $usuario->nombre =$request->nombre;
        $usuario->apellidos =$request->apellidos;
        $usuario->direccion =$request->direccion;
        $usuario->celular =$request->celular;
        $usuario->fecha =$request->fecha;
        $usuario->save();

        return view('usuarios.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
      
        $editUsuario = usuario::find($id);
        return view('usuarios.edit', compact('editUsuario'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editarUsuario= usuario::find($id);
        $editarUsuario->nombre= $request->nombre;
        $editarUsuario->apellidos = $request->apellidos;
        $editarUsuario->direccion = $request->direccion;
        $editarUsuario->celular = $request->celular;
        $editarUsuario->fecha = $request->fecha;
        $editarUsuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarusuario = usuario::find($id);
        $eliminarusuario->delete();
         return back()->with('Mensaje', 'usuario se elimino');
    
    }
}
