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

</div>
@endsection