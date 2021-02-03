@extends('welcome')
@section('contenido')

<h4 align="center"> Listado libros </h4>
<div align="right">
    <a  href="{{ url('/registrar') }}" class="btn btn-primary">Registrar</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">ISBN</th>
      <th scope="col">Titulo</th>      
       <th scope="col">stock</th>
       <th scope="col">Estado</th>      
      <th scope="col">Editorial</th>
      <th scope="col">Precio</th>
      <th scope="col">Descuento</th>
    </tr>
  </thead>
  <tbody>
  @foreach($libro as $c)
    <tr>
      <th scope="row">{{$c->id}}</th>
      <td>{{$c->ISBN}}</td>
      <td>{{$c->titulo}}</td>
      <td>{{$c->stock}}</td>
      
      @if($c->stock <= 0)
        <td>Agotado</td>
      
     @elseif($c->stock <= 10)
            <td>Ultimas Unidades</td>
          
          @else
            <td>Disponible</td>
          @endif
          
      
      <td>{{$c->editorial}}</td>
      <td>{{$c->precio}}</td>

    @if($c->editorial == 1 or $c->editorial == 5)

      <td>{{$c->precio*.05}}</td>
    @else
        <td>0</td>
    @endif
    </tr>

    @endforeach
  </tbody>
</table>

@stop

