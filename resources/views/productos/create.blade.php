@extends('plantilla')
@section('secciondinamica')
<h3>Formulario para el registro de productos</h3>
<form action="{{url('/producto')}}" method="POST">
@csrf
<label for="">id producto</label>

<input type="number" name="id" placeholder=" id producto" class="form-
control mb-2">
<label for="">nombre producto</label>

<input type="string" name="nombre" placeholder="nombre" class="form-
control mb-2">
<label for="">precio</label>

<input type="number" name="precio" placeholder="precio" class="form-
control mb-2">
<label for="">descripcion</label>

<input type="string" name="descripcion" placeholder="descripcion" class="form-
control mb-2">
<label for="">existencia</label>

<input type="string" name="existencia" placeholder="existencia" class="form-
control mb-2">

<button class="btn btn-primary btn-
block" type="submit">Insertar producto</button>

</form>
@endsection