@extends('plantilla')
@section('secciondinamica')
<h3>Formulario para registro de laboratorio</h3>
<form action="{{url('/laboratorios')}}" method="POST">
@csrf

<label for="">usuario</label>

<input type="text" name="usuario" placeholder="usuario" class="form-
control mb-2">
<label for="">producto</label>

<input type="text" name="producto" placeholder="producto" class="form-
control mb-2">
<label for="">ventas</label>

<input type="text" name="ventas" placeholder="ventas" class="form-
control mb-2">
<button class="btn btn-primary btn-
block" type="submit">Insertar</button>

</form>
@endsection