@extends('plantilla')
@section('secciondinamica')
<h3>Formulario para el registro de  usuarios</h3>
<form action="{{url('/usuario')}}" method="POST">
@csrf
<label for="">id usuario</label>

<input type="number" name="id" placeholder=" id usuario" class="form-
control mb-2">
<label for="">nombre</label>

<input type="string" name="nombre" placeholder="nombre" class="form-
control mb-2">
<label for="">apellidos</label>

<input type="string" name="apellidos" placeholder="apellidos" class="form-
control mb-2">
<label for="">direccion</label>

<input type="string" name="direccion" placeholder="direccion" class="form-
control mb-2">
<label for="">celular</label>

<input type="string" name="celular" placeholder="celular" class="form-
control mb-2">
<label for="">fecha</label>

<input type="date" name="fecha" placeholder="fecha de compra" class="form-
control mb-2">
<button class="btn btn-primary btn-
block" type="submit">Insertar cliente</button>

</form>
@endsection