@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario  {{$editventas->id}}</h3>

    <form action="{{route('ventas.update', $editventas)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    <label for="">id </label>
    <input type="text" name="id" placeholder="id" class="form-control mb-2" value = "{{$editventas->id}}">
    <label for="">fecha </label>
    <input type="date" name="fecha" placeholder="fecha" class="form-control mb-2" value = "{{$editventas->fecha}}">
    
    <label for="">cantidad </label>
    <input type="text" name="cantidad" placeholder="cantidad" class="form-control mb-2" value = "{{$editventas->cantidad}}">
    
    <label for="">valor</label>
    <input type="number" name="valor" placeholder="valor" class="form-control mb-2" value = "{{$editventas->valor}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection  
