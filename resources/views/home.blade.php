@extends('layout.layout')

@section('content')
<div class="container-fluid">
  <div class="row">
    <span id="menuB" onclick="openNav()">
      <i class="fas fa-bars"></i>
      <h4 style="display: inline-block;margin-left:2px;">
        Menu
      </h4>
    </span>
  </div>
  <h2>Resumen de Inventario</h2>
  <p>Detalle resumido de los articulos exitentes en Inventario.</p>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="tab-pane active"><br>
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.</p>
      <div class="table-responsive">
        <table class="table table-sm table-hover">
          <thead class="thead-light">
            <tr>
              <th scope="col" style="width: 10px;"></th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th colspan="3" scope="col" class="text-center">Estado</th>
            </tr>
          </thead>
          <thead class="thead-dark">
            <tr>
              <th scope="col" style="width: 10px;">#</th>
              <th scope="col">Nombre Articulo</th>
              <th scope="col">Descripción</th>
              <th scope="col" class="text-center">Activo</th>
              <th scope="col" class="text-center">Inactivo</th>
              <th scope="col" class="text-center">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Arma de Fuego</td>
              <td>Arma de fuego - 9mm</td>
              <td class="text-center">3</td>
              <td class="text-center">4</td>
              <td class="text-center">7</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Radio Portatil</td>
              <td>Radio Portatil Puesto de Seguridad</td>
              <td class="text-center">6</td>
              <td class="text-center">2</td>
              <td class="text-center">8</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <canvas id="myChart"></canvas>
        </div>
      </div>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
        aperiam.</p>
    </div>
  </div>

</div>
@endsection