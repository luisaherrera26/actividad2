@extends('plantilla')
@section('secciondinamica')
<h1>formulario </h1>
    <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">ID PRODUCTO</th>
      <th scope="col">NOMBRE PRODUCTO</th>
      <th scope="col">PRECIO</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">EXISTENCIA</th>
      
      
      </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->nombre}}</td>
      <td>{{$dato->precio}}</td>
      <td>{{$dato->descripcion}}</td>
      <td>{{$dato->existencia}}</td>
     
      <td>
      <a href="{{url('producto/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
      <form action="{{ route('producto.destroy', $dato) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
      </form>
    
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection