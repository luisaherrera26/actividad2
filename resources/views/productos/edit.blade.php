@extends('plantilla')
@section('secciondinamica')
    <h3>Formulario  {{$editproducto->id}}</h3>

    <form action="{{route('producto.update', $editproducto)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf 
    <label for="">id producto </label>
    <input type="number" name="id" placeholder="id" class="form-control mb-2" value = "{{$editproducto->id}}">
    <label for="">nombre producto </label>
    <input type="text" name="nombre" placeholder="nombre" class="form-control mb-2" value = "{{$editproducto->nombre}}">
    
    <label for="">precio</label>
    <input type="text" name="precio" placeholder="precio" class="form-control mb-2" value = "{{$editproducto->precio}}">
    
    <label for="">descripcion </label>
    <input type="text" name="descripcion" placeholder="descripcion" class="form-control mb-2" value =  "{{$editproducto->descripcion}}">

    <label for="">existencia </label>
    <input type="text" name="existencia" placeholder="existencia" class="form-control mb-2" value =  "{{$editproducto->existencia}}">
    
    
    <button class="btn btn-primary btn-block" type="submit">Actualizar</button>
    </form>
@endsection  

