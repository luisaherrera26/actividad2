@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario  {{$editlaboratorio->id}}</h3>

    <form action="{{route('laboratorios.update', $editlaboratorio)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    <label for="">id </label>
    <input type="text" name="id" placeholder="id" class="form-control mb-2" value = "{{$editlaboratorio->id}}">
    <label for="">usuario </label>
    <input type="text" name="usuario" placeholder="usuario" class="form-control mb-2" value = "{{$editlaboratorio->usuario}}">
    
    <label for="">producto </label>
    <input type="text" name="producto" placeholder="producto" class="form-control mb-2" value = "{{$editlaboratorio->producto}}">
    
    <label for="">ventas </label>
    <input type="number" name="ventas" placeholder="ventas" class="form-control mb-2" value = "{{$editlaboratorio->ventas}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection  

