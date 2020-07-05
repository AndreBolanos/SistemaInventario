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

  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>

</div>
@endsection
