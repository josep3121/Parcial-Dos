@extends('welcome')
@section('contenido')

<h4 align="center"> Listado Editoriales </h4>
<div align="right">
    <a  href="#" class="btn btn-primary">Registrar</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Direccion</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Telefono</th>
      <th scope="col">Opcion</th>
    </tr>
  </thead>
  <tbody>
  @foreach($editorial as $c)
    <tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->nombre}}</td>
      <td>{{$c->direccion}}</td>
      <td>{{$c->ciudad}}</td>
      <td>{{$c->telefono}}</td>
      <td> <a href="#" class="btn btn-success">Actualizar</a></td>
    </tr>

    @endforeach
  </tbody>
</table>

@stop

