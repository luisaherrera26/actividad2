<?php

namespace App\Http\Controllers;

use App\Models\laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = laboratorio::All();
        return view('laboratorio.index', compact('datos'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laboratorio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laboratorio=new laboratorio;
        $laboratorio->id = $request->id;
        $laboratorio->usuario = $request->usuario;
        $laboratorio->producto = $request->producto;
        $laboratorio->ventas = $request->ventas;
        $laboratorio->save();
 
        return view('laboratorio.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function show(laboratorio $laboratorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $editlaboratorio = laboratorio::find($id);
        return view('laboratorio.edit', compact('editlaboratorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $editarlaboratorio= laboratorio::find($id);
        $editarlaboratorio->usuario = $request->usuario;
        $editarlaboratorio->producto = $request->producto;
        $editarlaboratorio->ventas = $request->ventas;
        $editarlaboratorio->save();

        return redirect()->route('laboratorio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\laboratorio  $laboratorio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminarlaboratorio = laboratorio::find($id);
        $eliminarlaboratorio->delete();
         return back()->with('Mensaje', 'Apartamento se elimino');
    }
}
