@extends('plantilla')
@section('secciondinamica')
<h3>Formulario para ventas</h3>
<form action="{{url('/ventas')}}" method="POST">
@csrf

<label for="">ID venta</label>

<input type="number" name="id" placeholder="id" class="form-
control mb-2">
<label for="">fecha</label>

<input type="date" name="fecha" placeholder="fecha" class="form-
control mb-2">
<label for="">cantidad</label>

<input type="number" name="cantidad" placeholder="cantidad" class="form-
control mb-2">
<label for="">valor</label>

<input type="number" name="valor" placeholder="valor" class="form-
control mb-2">
<button class="btn btn-primary btn-
block" type="submit">Insertar</button>

</form>
@endsection