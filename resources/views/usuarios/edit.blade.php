@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario  {{$editUsuario->id}}</h3>

    <form action="{{route('usuario.update', $editUsuario)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    <label for="">id </label>
    <input type="number" name="id" placeholder="id" class="form-control mb-2" value = "{{$editUsuario->id}}">
    <label for="">nombre </label>
    <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2" value = "{{$editUsuario->nombre}}">
    
    <label for="">apellidos</label>
    <input type="text" name="apellidos" placeholder="apellidos" class="form-control mb-2" value = "{{$editUsuario->apellidos}}">
    
    <label for="">direccion </label>
    <input type="text" name="direccion" placeholder="direccion" class="form-control mb-2" value = "{{$editUsuario->direccion}}">

    <label for="">celular </label>
    <input type="text" name="celular" placeholder="celular" class="form-control mb-2" value = "{{$editUsuario->celular}}">
    
    <label for="">fecha</label>
    <input type="date" name="fecha" placeholder="fecha" class="form-control mb-2" value = "{{$editUsuario->fecha}}">

    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection  

