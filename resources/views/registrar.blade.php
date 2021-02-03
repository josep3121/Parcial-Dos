@extends('welcome')
@section('contenido')

<h4 align="center"> Registrar Editoriales </h4>

<form action="{{url('registrar')}}" method='POST'>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="name" name="name" class="form-control" />
    <label class="form-label" for="form1Example1">Nombre</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" id="dir" name="dir" class="form-control" />
    <label class="form-label" for="form1Example2">Direccion</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="ciu" name="ciu" class="form-control" />
    <label class="form-label" for="form1Example2">Ciudad</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="tel" name="tel" class="form-control" />
    <label class="form-label" for="form1Example2">Telefono</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block">Registrar</button>
</form>
<div align="center">
    <a  href="#" class="btn btn-danger">Cancelar</a>
</div>



@stop

