<?php

namespace App\Http\Controllers;

use App\Models\ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = ventas::All();
        return view('ventas.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ventas= new ventas;
        
        $ventas->id =$request->id;
        $ventas->fecha =$request->fecha;
        $ventas->cantidad =$request->cantidad;
        $ventas->valor =$request->valor;
       
        $ventas->save();

        return view('ventas.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show(ventas $ventas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editventas = ventas::find($id);
        return view('ventas.edit', compact('editventas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $editarventas= ventas::find($id);
        $editarventas->fecha= $request->fecha;
        $editarventas->cantidad = $request->cantidad;
        $editarventas->valor = $request->valor;
        
        $editarventas->save();

        return redirect()->route('ventas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarventas = ventas::find($id);
        $eliminarventas->delete();
         return back()->with('Mensaje', 'se elimino la venta');
    
    }
}
