@extends('plantilla')
@section('secciondinamica')
<h1>formulario </h1>
    <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">USUARIO</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">VENTAS</th>
      
      </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <th scope="row">{{$dato->id}}</th>
      <td>{{$dato->usuario}}</td>
      <td>{{$dato->producto}}</td>
      <td>{{$dato->ventas}}</td>
      <td>
      <a href="{{url('laboratorios/'.$dato->id.'/edit')}}"> <button type="button" class="btn btn-warning btn-sm">Editar</button></a>
      <form action="{{ route('laboratorios.destroy', $dato) }}" class="d-inline" method="POST">
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