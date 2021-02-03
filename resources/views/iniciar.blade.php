@extends('welcome')
@section('contenido')

<h4 align="center"> Libreria Nacional </h4>
<div class="row">
  <div class="col">
  <div class="card" style="width: 15rem;">
                <img src='{{url("/assets/img/1.jpg")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Nosotros </h5>
                    <p class="card-text"> Contamos con 250 proveedores y Editoriales entre las cuales estan las mas representativas
                    del mundo editorial en lenguas españolas e inglesas </p>
                    
                </div>
            </div>
  </div>
  <div class="col order-5">
  <div class="card" style="width: 15rem;">
                  <img src='{{url("/assets/img/2.png")}}' class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title"> Historia </h5>
                      <p class="card-text"> La Librería Nacional de Colombia fue fundada en la ciudad de Barranquilla en septiembre de 1941, 
                      y fue pionera en la modalidad de autoservicio y en la venta y distribución de revistas en el país. </p>
                      
                  </div>
              </div>
  </div>
  <div class="col order-1">
  <div class="card" style="width: 15rem;">
                <img src='{{url("/assets/img/3.jpg")}}' class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Servicios </h5>
                    <p class="card-text"> Recibimos mas de 500 novedades de libros que estan a disposicion de nuestros usuarios
                     en el país. </p>
                    
                </div>
            </div>
  </div>
</div>

@stop

