@extends('plantilla')
@section('secciondinamica')
<h1>formulario </h1>
    <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">FECHA</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">VALOR</th>
      
      </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->fecha}}</td>
      <td>{{$dato->cantidad}}</td>
      <td>{{$dato->valor}}</td>
      <td>
      <a href="{{url('ventas/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
      <form action="{{ route('ventas.destroy', $dato) }}" class="d-inline" method="POST">
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